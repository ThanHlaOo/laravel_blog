<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class BlogController extends Controller
{
    public function index()
    {   
        $article = Article::when(isset(request()->search), function($query){
                        $key = request()->search;
                        $query->orwhere('title', 'LIKE', "%$key%")->orwhere('description', 'LIKE', "%$key%");
                    })->with(['user', 'category'])->latest()->paginate(7);
        
        return view('public_view.index', ['articles' => $article]);
    }

    public function detail($id)
    {   
        $article = Article::find($id);
        $page = request()->page;
        return view('public_view.detail', compact('article', 'page'));
    }
    
    public function baseOnCategory($id){
      
        $article = Article::when(isset(request()->search), function($query){
            $key = request()->search;
            $query->orwhere('title', 'LIKE', "%$key%")->orwhere('description', 'LIKE', "%$key%");
        })->where('category_id', 'LIKE', "$id" )->with(['user', 'category'])->latest()->paginate(7);

        return view('public_view.index', ['articles' => $article]);
    }

}
