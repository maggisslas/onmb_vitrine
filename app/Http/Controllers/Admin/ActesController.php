<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendNewsletterEmail;
use App\Managers\StoreFile;
use App\Models\Acte;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::where('type' , 'actes_autorisation')->where('is_enabled' , true)->get();
        return view('admin.actes.index' , compact('categories'));
    }

    public function getData(){

        $actes = Acte::orderBy('title')->get();
        $data = [];

        foreach ($actes as $key => $acte) {

            $checked = $acte->is_enabled ? 'checked' : '';

            $switch = '<div class="switch-md-customer mx-2">
                            <label class="switch">
                                <input type="checkbox"
                                    id="state-'.$acte->id.'"
                                    onchange="acte_state( '.$acte->id.' , \'state-'.$acte->id.'\')"
                                    '.$checked.' >
                                <span class="switch-state"></span>
                            </label>
                        </div>';

            $pdf = $acte->getFirstMediaUrl('Acte') ? $acte->getFirstMediaUrl('Acte') : 'javascript:void(0)' ;


            $title = addslashes($acte->title);
  

            $data[$key] = [
                'id'        => ($key+1),
                'title'     => '<a href='.$pdf.' target="_blank"> '.mb_strimwidth($acte->title, 0, 20, "...").' </a>' ,
                // 'url'       => '<a href='.$pdf.' target="_blank"> Lien </a>',
                'description'       =>  mb_strimwidth($acte->description, 0, 20, "..."),
                'category'          =>  $acte->category->name,
                'by'        => '<span class="badge badge-primary"> <i class="fa fa-user"></i> '.
                                    $acte->user->firstname.' '.$acte->user->lastname
                                .'</span>',
                'action'    => '<div class="d-flex justify-content-center">

                                    <a class="text-success fs-4 mx-3 edit-btn"
                                        data-bs-toggle="modal"
                                        data-original-title="Modifier un l\'acte "
                                        data-bs-target="#updateModal"
                                        title="Modifier un l\'acte "
                                        data-acte="'.htmlspecialchars(json_encode($acte, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT)).'"
                                        onclick="editActe(this , \''.$pdf.'\')"
                                        href="javascript:void(0);">
                                        <i class="fa fa-edit"></i>
                                    </a>


                                    <a class="text-danger fs-4 mx-3"
                                        data-original-title="Supprimer un acte"
                                        title="Supprimer un acte"
                                        onclick="deleteActe('.$acte->id.' , \''.$title.'\')"
                                        href="javascript:void(0);">
                                        <i class="fa fa-trash"></i>
                                    </a>

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
            'category_id'       => 'required|string',
            'acte'              => 'required|file|mimes:pdf'
        ];

        $request->validate($rules);

        $data = [
            'title'             =>  $request->title,
            'description'       =>  $request->description,
            'category_id'       =>  $request->category_id,
            'user_id'           =>  Auth::id()
        ];

        $acte = Acte::create($data);

        // Update Catégorie
        if ($category = Category::find($request->category_id)) {
            if (!$category->used) {
                $category->used = true;
                $category->save();
            }
        }

        // Save picture
        if ($request->hasFile('acte')) {
            $file = $request->file('acte');
            $storeFile->addFile($file, 'Acte' , $acte );
        }


        // return response()->json(['success' => true, 'message' => 'Acte ajouté avec succès']);
        return back();

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
            'category_id'       => 'required|string',
            'acte'              => 'required|file|mimes:pdf',
        ];

        $request->validate($rules);

        $acte = Acte::find($id);

        if($acte){
            // Verify if new categorie already exists
            $exist_acte = Acte::where('title', $request->title)->first();

            if($exist_acte && $exist_acte->id != $acte->id){
                // return redirect()->route('admin.categories.index')->with('error', 'Cette catégorie existe déjà');
                return response()->json(['success' => false, 'message' => 'Cet acte existe déjà']);
            }

            $data = [
                'title'             =>  $request->title,
                'description'       =>  $request->description,
                'category_id'       =>  $request->category_id,
                'user_id'           =>  Auth::id()
            ];

            $acte->update($data);

            // Update picture
            if ($request->hasFile('acte')) {

                $fileName = $request->file('acte')->getClientOriginalName();

                if ($fileName != "no_image.jpg") {

                    // Delete
                    if ($acte->getFirstMedia('Acte')) {
                        $acte->getFirstMedia('Acte')->delete(); // Delete old principal picture
                    }
                    // New save
                    $file = $request->file('acte');
                    $storeFile->addFile($file, 'Acte' , $acte);

                }
            };



            // return redirect()->route('admin.categories.index')->with('success', 'Catégorie modifiée avec succès');
            return response()->json(['success' => true, 'message' => 'Acte modifié avec succès']);
        }else{
            // return redirect()->route('admin.categories.index')->with('error', 'Cette catégorie n\'existe pas');
            return response()->json(['success' => false, 'message' => 'Cet acte n\'existe pas']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $acte = Acte::find($id);
            if ($acte->delete()) {

                return response()->json(['status' => 'success' , 'message' => 'Acte supprimé.']);
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
            $acte = Acte::limit(10)->get();
        }else{
            $acte = Acte::where('name' , 'LIKE' , '%'.$request->search.'%')
                                ->limit(10)
                                ->get();
        }

        return response()->json($acte);

    }

    public function state($id , $status){

        $acte = Acte::find($id);
        $acte->is_enabled = ($status == 'false') ? false : true;
        $acte->save();

        return response()->json();
    }

}
