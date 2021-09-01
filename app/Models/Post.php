<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'tbl_posts';
    protected $fillable = [ 
        'post_name','post_age','post_image','post_introduce','post_experience'
    ];
}