<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsersCreateRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){
        $users = Users::all();
        return  view("front.Admin.users", compact('users'));
    }
}
