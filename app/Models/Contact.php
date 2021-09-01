<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'tbl_contact';
    protected $fillable = [ 
        'post_name','post_age','post_adress','post_phone','post_comment','created_at'
    ];
}
