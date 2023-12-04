<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index() {

        $comments = Post::with('comments')->get();
        // return ($comments);
        return view('one-to-many',compact(['comments']));
    }
}
