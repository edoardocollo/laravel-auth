<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    return view('guest.welcome');
  }
  public function blog()
  {
    $articles = Article::all();
    return view('guest.blog', compact('articles'));
  }
  public function about()
  {
    return view('guest.about');
  }
}
