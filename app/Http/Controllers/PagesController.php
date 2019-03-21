<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Post;

class PagesController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('blog', compact('posts'));
    }
}

