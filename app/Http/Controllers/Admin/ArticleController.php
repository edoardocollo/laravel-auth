<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articoli.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articoli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
      'titolo' => 'required',
      'autore' => 'required',
      'contenuto' => 'required',
    ]);


    $newArticle = new Article;
    $newArticle->titolo = $request->titolo;
    $newArticle->contenuto = $request->contenuto;
    $newArticle->autore = $request->autore;
    $newArticle->save();

    return redirect()->route('articoli.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show( $article)
    {
        $articleTarget = Article::find($article);
        return view('admin.articoli.show', compact('articleTarget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit( $article)
    {

      $articleTarget = Article::find($article);
      return view('admin.articoli.edit', compact('articleTarget'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $article)
    {
      $request->validate([
      'titolo' => 'required',
      'autore' => 'required',
      'contenuto' => 'required',
    ]);


    $articletarget = Article::find($article);
    $articletarget->titolo = $request->titolo;
    $articletarget->contenuto = $request->contenuto;
    $articletarget->autore = $request->autore;
    $articletarget->update();
    return redirect()->route('articoli.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($article)
    {
      $articletarget = Article::find($article);
      $articletarget->delete();
      return redirect()->route('articoli.index');

    }
}
