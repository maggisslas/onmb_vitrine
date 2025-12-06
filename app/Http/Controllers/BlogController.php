<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($category_slug){

        if ($category = Category::where('slug' , $category_slug)->first()) {
            
            // $articles = Article::where('category_id' , $category->id)->get();
            // $categories = Category::orderBy('name')->get();

            $categories = Category::orderBy('name')->where('type' , 'blog')
                                                    ->where('is_enabled' , true)
                                                    ->get();
            $articles = Article::orderBy("updated_at" , "DESC")->where('category_id' , $category->id)
                                                                ->where('is_enabled' , true)
                                                                ->paginate(6);

            return view('pages.publications.index' , compact('category' , 'categories' , 'articles'));
        }
        
        
    }
}
