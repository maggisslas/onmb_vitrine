<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Managers\StoreFile;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $request->query('page');
        return view('admin.categories.index' , compact('page'));
    }

    public function getData($page){

        $categories = Category::orderBy('name')->where('type' , $page)->get();
        $data = [];

        foreach ($categories as $key => $category) {

            $picture = $category->getFirstMediaUrl('Picture') ? $category->getFirstMediaUrl('Picture') : asset('default/no_image.jpg') ;

            $name = addslashes($category->name);
            $description = addslashes($category->description);
            $picture = addslashes($picture);

            $checked = $category->is_enabled ? 'checked' : '';

            $switch = '<div class="switch-md-customer mx-2">
                            <label class="switch">
                                <input type="checkbox"
                                    id="state-'.$category->id.'"
                                    onchange="category_state( '.$category->id.' , \'state-'.$category->id.'\')"
                                    '.$checked.' >
                                <span class="switch-state"></span>
                            </label>
                        </div>';

            $delete = !$category->used ? '
                <a class="text-danger fs-4 mx-3"
                    data-original-title="Supprimer une catégorie"
                    title="Supprimer une catégorie"
                    onclick="deleteCategory('.$category->id.' , \''.$name.'\')"
                    href="javascript:void(0);">
                    <i class="fa fa-trash"></i>
                </a>
            ' : '';



            $data[$key] = [
                'id'        => ($key+1),
                'picture'   => $category->getFirstMediaUrl('Picture') != null ?
                                '<img src="'.$category->getFirstMediaUrl('Picture').'" alt="" width="70" />'
                                : '<img src="../default/no_image.jpg" alt="" width="70" class="" />',
                'name'      => $category->name,
                'slug'      => '<span class="badge badge-danger"> <i class="fa fa-link"></i> '.
                                    $category->slug
                                .'</span>',
                'description'=> $category->description,
                'by'        => '<span class="badge badge-primary"> <i class="fa fa-user"></i> '.
                                    $category->user->firstname.' '.$category->user->lastname
                                .'</span>',
                'action'    => '<div class="d-flex justify-content-center">

                                    <a class="text-success fs-4 mx-3"
                                        data-bs-toggle="modal"
                                        data-original-title="Modifier une catégorie"
                                        data-bs-target="#updateModal"
                                        title="Modifier une catégorie"
                                        onclick="editCategory('.$category->id.' , \''.$name.'\' , \''.$description.'\' , \''.$picture.'\')"
                                        href="javascript:void(0);">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    '.$delete.'

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
            'name'          => 'required|string',
            'description'   => 'required|string',
            // 'picture'       => 'required|image|mimes:jpeg,png,jpg|dimensions:width=411,height=370'
            'picture'       => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];

        $request->validate($rules);

        $page = $request->query('page');

        // Verify if categorie already exists
        $exist_category = Category::where('name', $request->name)->where('type' , $page)->first();

        if(!$exist_category){

            $data = [
                'name'          =>  $request->name,
                'description'   =>  $request->description,
                'type'          =>  $page,
                'user_id'       =>  Auth::id()
            ];

            $category = Category::create($data);

            // Save picture
            $file = $request->file('picture');
            $storeFile->addFile($file, 'Picture' , $category );



            // return redirect()->route('admin.categories.index' , ['page' => $page])->with('success', 'Catégorie ajoutée avec succès');
            return response()->json(['success' => true, 'message' => 'Catégorie ajoutée avec succès']);
        }else{
            // return redirect()->route('admin.categories.index' , ['page' => $page])->with('error', 'Cette catégorie existe déjà');
            return response()->json(['success' => false, 'message' => 'Cette catégorie existe déjà']);
        }
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
            'name'          => 'required|string',
            'description'   => 'required|string',
            'picture'       => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];

        $request->validate($rules);

        $category = Category::find($id);

        if($category){
            // Verify if new categorie already exists
            $exist_category = Category::where('name', $request->name)->first();

            if($exist_category && $exist_category->id != $category->id){
                // return redirect()->route('admin.categories.index')->with('error', 'Cette catégorie existe déjà');
                return response()->json(['success' => false, 'message' => 'Cette catégorie existe déjà']);
            }

            $data = [
                'name'          =>  $request->name,
                'description'   =>  $request->description
            ];

            $category->update($data);

            // Update picture

            if ($request->hasFile('picture')) {

                $fileName = $request->file('picture')->getClientOriginalName();

                if ($fileName != "no_image.jpg") {

                    // Delete
                    if ($category->getFirstMedia('Picture')) {
                        $category->getFirstMedia('Picture')->delete(); // Delete old principal picture
                    }
                    // New save
                    $file = $request->file('picture');
                    $storeFile->addFile($file, 'Picture' , $category);

                }
            };
            // return redirect()->route('admin.categories.index')->with('success', 'Catégorie modifiée avec succès');
            return response()->json(['success' => true, 'message' => 'Catégorie modifiée avec succès']);
        }else{
            // return redirect()->route('admin.categories.index')->with('error', 'Cette catégorie n\'existe pas');
            return response()->json(['success' => false, 'message' => 'Cette catégorie n\'existe pas']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::find($id);
            if ($category->delete()) {

                return response()->json(['status' => 'success' , 'message' => 'Catégorie supprimée.']);
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
            $categories = Category::limit(10)->get();
        }else{
            $categories = Category::where('name' , 'LIKE' , '%'.$request->search.'%')
                                ->limit(10)
                                ->get();
        }

        return response()->json($categories);

    }

    public function state($id , $status){

        $category = Category::find($id);
        $category->is_enabled = ($status == 'false') ? false : true;
        $category->save();

        return response()->json();
    }

}
