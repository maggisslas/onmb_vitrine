<?php

namespace App\Http\Controllers;

use App\Models\Acte;
use App\Models\Category;
use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class ActeController extends Controller
{
    public function index()
    {

        // if ($category_id == null) {
        //     $actes = Acte::orderBy('title')->get();
        // }else{
        //     $actes = Acte::orderBy('title')->where('category_id' , $category_id)->get();
        // }

        $categories = Category::orderBy('name')->where('type', 'actes_autorisation')->get();

        // dd($actes);
        return view('pages.onmb.actes_autorisations', compact('categories'));
        // return response()->json(['actes' => $actes , 'categories' => $categories]);
    }

    public function search(Request $request, $category_id = null)
    {


        $actes = Acte::all();
        $keyword = $request->query('name');

        // Construction de la requête
        $actes = Acte::query()
        ->when($category_id, function ($query, $category_id) {
            // Si une catégorie est sélectionnée
            $query->where('category_id', $category_id);
        })
        ->when($keyword, function ($query, $keyword) {
            // Si une recherche est saisie
            $query->where(function ($q) use ($keyword) {
                $q->where('description', 'like', "%{$keyword}%");
            });
        })
        ->get();


        // if ($category_id == null || $category_id == 0) {

        //     $actes = Acte::orderBy('title')->get();
        // } else {

        //     if ($category_id > 0) {
        //         $actes = Acte::orderBy('title')->where('category_id', $category_id)->get();
        //     } else {

                

        //     }
        // }



        // Ajout de l'URL
        $actes = $actes->map(function ($acte) {
            $acte->url = $acte->getFirstMediaUrl('Acte');
            return $acte;
        });

        return response()->json(['actes' => $actes]);
    }
}
