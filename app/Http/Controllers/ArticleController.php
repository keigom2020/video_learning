<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = '記事一覧';
        $articles = Article::all();
        return view('article.index', [
            'message' => $message, 
            'articles' => $articles,
            // 'updated_at' => $updated_at
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $message = '新しい記事';
        return view('article.new', ['message' => $message]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        // $article->updated_at = $request->updated_at;
        $article->save();
        return redirect()->route('article.index', ['id' => $article->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, Article $article)
    {
        // $message = '記事 ' . $id;
        $articles = Article::all();
        $article = Article::find($id);
        // $article_players = Article::where('category_id', $article->category_id)->get();

        return view('article.show', [
            // 'message' => $message, 
            'articles' => $articles, 
            'article' => $article,
            // 'updated_at' => $updated_at
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, Article $article)
    {
        $message = '記事を編集する ' . $id;
        $article = Article::find($id);
        return view('article.edit', ['message' => $message, 'article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article, $id)
    {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect()->route('article.show', ['id' => $article->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id, Article $article)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
