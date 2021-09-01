<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Pack;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $packs = Pack::all();
        $posts = Post::all();
        $trainer = Post::where('post_experience','5')->get();
        $proPacks = Pack::where('post_category','pro')->get();
        return  view("front.index", compact('posts','packs','proPacks','trainer'));
    }
}