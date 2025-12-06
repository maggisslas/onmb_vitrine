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

            $recent_articles = Article::orderBy("updated_at" , "DESC")
                                        ->where('is_enabled' , true)
                                        ->where('category_id', $category->id)
                                        ->take(3)
                                        ->get();

            return view('pages.publications.index' , compact('category' , 'categories' , 'articles' , 'recent_articles'));
        }


    }

    public function search(Request $request){

        // dd('Hello');

        $search = $request->query('search');

        $categories = Category::orderBy('name')->where('type' , 'blog')
                                                    ->where('is_enabled' , true)
                                                    ->get();

        $articles = Article::orderBy("updated_at" , "DESC")
                            ->where('title' , 'LIKE' , '%'.$search.'%')
                            ->where('is_enabled' , true)->paginate(6);

        $recent_articles = Article::orderBy("updated_at" , "DESC")
                                        ->where('is_enabled' , true)
                                        ->take(3)
                                        ->get();

        return view('pages.publications.index' , compact('categories' , 'articles' , 'search' , 'recent_articles'));
    }

    public function show($id, $slug){

        // dd($slug);

        if ($article = Article::where('id' , $id)->where('slug' , $slug)->first()) {

            $categories = Category::orderBy('name')->where('type' , 'blog')
                                                    ->where('is_enabled' , true)
                                                    ->get();

            $recent_articles = Article::orderBy("updated_at" , "DESC")
                                        ->where('is_enabled' , true)
                                        ->where('id', '!=', $article->id)
                                        ->take(3)
                                        ->get();

            return view('pages.publications.details' , compact('article' , 'categories' , 'recent_articles'));
        }

    }
}
