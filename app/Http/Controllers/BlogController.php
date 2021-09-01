<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::all();
        return  view("front.blog", compact('blogs'));
    }
    public function listblog(){
        $blogs = Blog::all();
        return  view("front.Admin.listBlog", compact('blogs'));
    }
    
    public function addblog(){
        return view('front.Admin.addBlog');
    }
    public function create(){
        return view('front.Admin.addBlog');
    }
    public function store(Request $request){
            $request->validate([
                "post_title" => 'required',
                "post_image" =>'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
                "post_content" =>'required',
            ]);
                $input = $request->all();
                if($request->hasFile('post_image'))
                {
                   $destination_path = 'public/images/blog';
                   $image = $request->file('post_image');
                   $image_name = $image->getClientOriginalName();
                   $path = $request->file('post_image')->storeAs($destination_path,$image_name);
                   $input['post_image'] = $image_name;
                }
            Blog::create($input);
            return redirect()->route('post.blog');
    }
    public function delete($id){
        Blog::find($id)->delete();
        return redirect()->route('post.blog');
    }
}
