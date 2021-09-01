<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'tbl_users';
    protected $fillable = [ 
        'post_name','post_phone','post_email','post_password','post_repeatpassword'
    ];
}
