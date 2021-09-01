<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class TrainerController extends Controller
{
    public function trainer(){
        $posts = Post::all();
        return  view("front.trainer", compact('posts'));
    }
}
