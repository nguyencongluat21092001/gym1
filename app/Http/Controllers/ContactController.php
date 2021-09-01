<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactCreateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function listcontact(){
        $contacts = Contact::all();
        return  view("front.Admin.listContact", compact('contacts'));
    }
    public function listcomment(){
        $comment = Contact::all();
        return  view("front.Admin.frontdashboard.app", compact('contacts'));
    }
    public function addcontact(){
        return view("front.contact");
    }
    public function create(){
        return view("front.contact");
    }
    public function store(ContactCreateRequest $contactCreateRequest){
        try{
          Contact::create([
            "post_name"=>$contactCreateRequest->post_name, 
            "post_age"=>$contactCreateRequest->post_age, 
            "post_adress"=>$contactCreateRequest->post_adress, 
            "post_phone"=>$contactCreateRequest->post_phone, 
            "post_comment"=>$contactCreateRequest->post_comment, 
            "created_at"=>$contactCreateRequest->created_at, 
          ]);
          return redirect()->route('post.contact');
        }catch(\Exception $ex){
           return back();
        }
    }
}
