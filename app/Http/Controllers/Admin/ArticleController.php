<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendNewsletterEmail;
use App\Managers\StoreFile;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::where('type' , 'blog')->where('is_enabled' , true)->get();
        return view('admin.articles.index' , compact('categories'));
    }

    public function getData(){

        $articles = Article::orderBy('title')->get();
        $data = [];

        foreach ($articles as $key => $article) {

            $checked = $article->is_enabled ? 'checked' : '';

            $switch = '<div class="switch-md-customer mx-2">
                            <label class="switch">
                                <input type="checkbox"
                                    id="state-'.$article->id.'"
                                    onchange="article_state( '.$article->id.' , \'state-'.$article->id.'\')"
                                    '.$checked.' >
                                <span class="switch-state"></span>
                            </label>
                        </div>';

            $picture = $article->getFirstMediaUrl('Picture') ? $article->getFirstMediaUrl('Picture') : asset('default/no_image.jpg') ;


            $title = addslashes($article->title);
            // $description = addslashes($article->description);
            $picture = addslashes($picture);


            $pictureSup = [];
            foreach ($article->getMedia('PictureSup') as $p) {
                array_push($pictureSup , addslashes($p->getUrl()));
            }


            $data[$key] = [
                'id'        => ($key+1),
                'picture'   => $article->getFirstMediaUrl('Picture') != null ?
                                '<img src="'.$article->getFirstMediaUrl('Picture').'" alt="" width="70" />'
                                : '<img src="../default/no_image.jpg" alt="" width="70" class="" />',
                'title'     => mb_strimwidth($article->title, 0, 20, "..."),
                'slug'      => '<span class="badge badge-danger"> <i class="fa fa-link"></i> '.
                                    $article->slug
                                .'</span>',
                'description'       =>  mb_strimwidth($article->description, 0, 20, "..."),
                // 'caracteristiques'  =>  $article->caracteristiques,
                // 'localisation'      =>  $article->localisation,
                'category'          =>  $article->category->name,
                'by'        => '<span class="badge badge-primary"> <i class="fa fa-user"></i> '.
                                    $article->user->firstname.' '.$article->user->lastname
                                .'</span>',
                'action'    => '<div class="d-flex justify-content-center">

                                    <a class="text-success fs-4 mx-3 edit-btn"
                                        data-bs-toggle="modal"
                                        data-original-title="Modifier un article"
                                        data-bs-target="#updateModal"
                                        title="Modifier un article"
                                        data-article="'.htmlspecialchars(json_encode($article, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT)).'"
                                        data-picture-sup="'.htmlspecialchars(json_encode($pictureSup, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT)).'"
                                        onclick="editArticle(this , \''.$picture.'\')"
                                        href="javascript:void(0);">
                                        <i class="fa fa-edit"></i>
                                    </a>


                                    <a class="text-danger fs-4 mx-3"
                                        data-original-title="Supprimer un article"
                                        title="Supprimer un article"
                                        onclick="deleteArticle('.$article->id.' , \''.$title.'\')"
                                        href="javascript:void(0);">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    '.$switch.'

                                </div>'
            ];
        }

        return response()->json(['data' => $data ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , StoreFile $storeFile)
    {
        $rules = [
            'title'             => 'required|string',
            'description'       => 'required|string',
            'post'              => 'required|string',
            'category_id'       => 'required|string',
            'picture'           => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];

        $request->validate($rules);

        // Verify if article already exists
        // $exist_article = Article::where('title', $request->title)->first();

        // if(!$exist_article){

            $data = [
                'title'             =>  $request->title,
                'description'       =>  $request->description,
                'post'              =>  $request->post,
                'category_id'       =>  $request->category_id,
                'user_id'           =>  Auth::id()
            ];

            if ($request->maps) {
                $data['maps'] = $request->maps;
            }

            $article = Article::create($data);

            // Update Catégorie
            if ($category = Category::find($request->category_id)) {
                if (!$category->used) {
                    $category->used = true;
                    $category->save();
                }
            }

            // Save picture
            if ($request->hasFile('picture')) {
                $file = $request->file('picture');
                $storeFile->addFile($file, 'Picture' , $article );
            }

            if ($request->hasFile('pictureSup')) {
                foreach ($request->file('pictureSup') as $picture) {
                    $storeFile->addFile($picture, 'PictureSup' , $article );
                }
            }

            // // Dispatch du Job Newsletter
            // try {
            //     SendNewsletterEmail::dispatch($article);
            // } catch (\Throwable $th) {
            //     dd($th->getMessage());
            // }



            // return redirect()->route('admin.categories.index' , ['page' => $page])->with('success', 'Catégorie ajoutée avec succès');
            return response()->json(['success' => true, 'message' => 'Article ajouté avec succès']);
        // }else{
        //     // return redirect()->route('admin.categories.index' , ['page' => $page])->with('error', 'Cette catégorie existe déjà');
        //     return response()->json(['success' => false, 'message' => 'Cet article existe déjà']);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id , StoreFile $storeFile)
    {

        $rules = [
            'title'             => 'required|string',
            'description'       => 'required|string',
            'post'              => 'required|string',
            'category_id'       => 'required|string',
            'picture'           => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $request->validate($rules);

        $article = Article::find($id);

        if($article){
            // Verify if new categorie already exists
            $exist_article = Article::where('title', $request->title)->first();

            if($exist_article && $exist_article->id != $article->id){
                // return redirect()->route('admin.categories.index')->with('error', 'Cette catégorie existe déjà');
                return response()->json(['success' => false, 'message' => 'Cet article existe déjà']);
            }

            $data = [
                'title'             =>  $request->title,
                'description'       =>  $request->description,
                'post'              =>  $request->post,
                'category_id'       =>  $request->category_id,
                'user_id'           =>  Auth::id()
            ];

            $article->update($data);

            // Update picture
            if ($request->hasFile('picture')) {

                $fileName = $request->file('picture')->getClientOriginalName();

                if ($fileName != "no_image.jpg") {

                    // Delete
                    if ($article->getFirstMedia('Picture')) {
                        $article->getFirstMedia('Picture')->delete(); // Delete old principal picture
                    }
                    // New save
                    $file = $request->file('picture');
                    $storeFile->addFile($file, 'Picture' , $article);

                }
            };

            // Update pictureSup
            if ($request->hasFile('pictureSup')) {

                // Delete
                foreach ($article->getMedia('PictureSup') as $p) {
                    $p->delete();
                }

                // New Save
                foreach ($request->file('pictureSup') as $picture) {
                    $storeFile->addFile($picture, 'PictureSup' , $article );
                }
            }




            // return redirect()->route('admin.categories.index')->with('success', 'Catégorie modifiée avec succès');
            return response()->json(['success' => true, 'message' => 'Article modifié avec succès']);
        }else{
            // return redirect()->route('admin.categories.index')->with('error', 'Cette catégorie n\'existe pas');
            return response()->json(['success' => false, 'message' => 'Cet article n\'existe pas']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $article = Article::find($id);
            if ($article->delete()) {

                return response()->json(['status' => 'success' , 'message' => 'Article supprimé.']);
            }else{
                return response()->json(['status' => 'error' , 'message' => "Une erreur s'est produite"]);
            }
        } catch (\Throwable $th) {
            // return response()->json($th->getMessage());
            return response()->json(['status' => 'error' , 'message' => $th->getMessage()]);

        }

    }

    public function searchSelect2(Request $request){

        if ($request->search == 'undefined') {
            $article = Article::limit(10)->get();
        }else{
            $article = Article::where('name' , 'LIKE' , '%'.$request->search.'%')
                                ->limit(10)
                                ->get();
        }

        return response()->json($article);

    }

    public function state($id , $status){

        $article = Article::find($id);
        $article->is_enabled = ($status == 'false') ? false : true;
        $article->save();

        return response()->json();
    }

}
