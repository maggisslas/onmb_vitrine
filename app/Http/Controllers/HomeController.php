<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $articles = Article::orderBy("updated_at" , "DESC")
                                        ->where('is_enabled' , true)
                                        ->take(4)
                                        ->get();

        $category = Category::first();

        return view('index' , compact('articles' , 'category'));
    }
}
