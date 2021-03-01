<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    return view('guest.welcome');
  }
  public function blog()
  {
    return view('guest.blog');
  }
  public function about()
  {
    return view('guest.about');
  }
}
