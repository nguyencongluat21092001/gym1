<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\PackCreateRequest;
use App\Models\Pack;
use Illuminate\Http\Request;

class PricingController extends Controller
{  
    public function pricing(){
        $packs = Pack::all();
        return  view("front.pricing", compact('packs'));
    }
    public function index(){
        $packs = Pack::all();
        return view('front.Admin.listPricing',compact('packs'));
    }
    public function create(){
        return view('front.Admin.addPricing');
    }
    public function store(PackCreateRequest $packCreateRequest){
        try{
            Pack::create([
               "post_category"=>$packCreateRequest->post_category, 
               "post_price"=>$packCreateRequest->post_price, 
               "post_month"=>$packCreateRequest->post_month, 
               "post_cardio"=>$packCreateRequest->post_cardio, 
               "post_swimming"=>$packCreateRequest->post_swimming, 
               "post_yoga"=>$packCreateRequest->post_yoga, 
               "post_zumba"=>$packCreateRequest->post_zumba, 
               "post_massage"=>$packCreateRequest->post_massage, 
               "post_boxing"=>$packCreateRequest->post_boxing, 
            ]);
            return redirect()->route('post.pack');
        }catch(\Exception $ex){
            return back();
        }
        
    }
    public function delete($id){
        Pack::find($id)->delete();
        return redirect()->route('post.pack');
    }
}