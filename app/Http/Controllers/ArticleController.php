<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiIndex(){
        
        $article = Article::when(isset(request()->search), function($query){
            $key = request()->search;
            $query->orwhere('title', 'LIKE', "%$key%")->orwhere('description', 'LIKE', "%$key%");
        })->with(['user', 'category'])->latest()->paginate(7);

        return $article;
    }
    public function index()
    { 
    
        $article = Article::when(isset(request()->search), function($query){
                        $key = request()->search;
                        $query->orwhere('title', 'LIKE', "%$key%")->orwhere('description', 'LIKE', "%$key%");
                    })->with(['user', 'category'])->latest()->paginate(7);
        
        return view('article.index', ['articles' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $request->validate([
            "category" => "required|exists:categories,id",
            "title" => "required|min:5|max:200",
            "description" => "required|min:5"
        ]);

//                return $request;


        $article = new Article();
        $article->title = $request->title;
        $article->slug = Str::slug($request->title)."-".uniqid();
        $article->category_id = $request->category;
        $article->description = $request->description;
        $article->excerpt = Str::words($request->description,50);

        $article->user_id = Auth::id();
        $article->save();

        return redirect()->route('articles.index')->with("message","New Article Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {   
        
        $page = request()->page;
        return view('article.show', compact('article', 'page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $request->validate([
            "category" => "required|exists:categories,id",
            "title" => "required|min:5|max:200",
            "description" => "required|min:5"
        ]);

//                return $request;


        $article->title = $request->title;
        $article->slug = Str::slug($request->title)."-".uniqid();
        $article->category_id = $request->category;
        $article->description = $request->description;
        $article->excerpt = Str::words($request->description,50);

        $article->update();

        return redirect()->route('articles.index')->with("message","New Article updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {   
        $article->delete();
        return redirect()->route('articles.index', ['page' => request()->page])->with('message', 'Article is deleted');
    }
}
