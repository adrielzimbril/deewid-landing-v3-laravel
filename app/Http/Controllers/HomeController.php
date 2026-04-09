<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller {
  public function index()
  : View | \Illuminate\Foundation\Application | Factory | Application {

    $posts_per_page = '5';
    $posts = Blog::where('status', 1)->orderBy('id', 'desc')->paginate($posts_per_page);

    return view('content.home', compact('posts'));
  }
}
