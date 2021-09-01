<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'tbl_schedule';
    protected $fillable = [ 
        'post_day','post_hour','post_class','post_pt'
    ];
}