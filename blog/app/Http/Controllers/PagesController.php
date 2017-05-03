<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller {

  public function getIndex() {
    $posts = Post::all();
    return view('pages.welcome')->withPosts($posts);
  }
}
