<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleCreateRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function gallery(){
        $schedules = Schedule::all();
        
        return  view("front.gallery", compact('schedules'));
    }
    public function index(){
        $schedules = Schedule::all();
        return view('front.Admin.listschedule',compact('schedules'));
    }
    public function create(){
        return view('front.Admin.addschedule');
    }
    public function store(ScheduleCreateRequest $scheduleCreateRequest){
        try{
            Schedule::create([
                "post_day"=>$scheduleCreateRequest->post_day, 
                "post_hour"=>$scheduleCreateRequest->post_hour, 
                "post_class"=>$scheduleCreateRequest->post_class, 
                "post_pt"=>$scheduleCreateRequest->post_pt, 
            ]);
            return redirect()->route('post.schedule');
        }catch(\Exception $ex){
            return back();
        }
    }
}