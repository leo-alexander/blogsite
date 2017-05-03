<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller {

  public function getIndex() {
    $posts = Post::all();
    return view('pages.welcome')->withPosts($posts);
  }

  public function getAbout() {
    $first = 'Leo';
    $last = 'Mclay';
    $fullname = $first . " " . $last;
    $email = "leo.mclay@gmail.com";
    $data['email'] = $email;
    $data['fullname'] = $fullname;
    return view('pages.about')->withData($data);
  }

  public function getContact() {
    return view('pages.contact');
  }

}
