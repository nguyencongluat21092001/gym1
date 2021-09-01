<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return  view("front.Admin.dashboard_manager", compact('posts'));
    }
    public function create(){
        return view("front.Admin.dashboard");
    }
    
    public function store(Request $request)
    {
        $request->validate([
            "post_name" => 'required',
            "post_age" =>'required',
            "post_image" =>'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
        ]);
            $input = $request->all();
            if($request->hasFile('post_image'))
            {
               $destination_path = 'public/images/trainer';
               $image = $request->file('post_image');
               $image_name = $image->getClientOriginalName();
               $path = $request->file('post_image')->storeAs($destination_path,$image_name);
               $input['post_image'] = $image_name;
            }
            Post::create($input);
            return redirect()->route('post.index');
        
    }
    public function delete($id){
        Post::find($id)->delete();
        return redirect()->route('post.index');
    }
}