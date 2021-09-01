<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    protected $table = 'tbl_packs';
    protected $fillable = [ 
        'post_category','post_price','post_month','post_cardio','post_swimming','post_yoga','post_zumba','post_massage','post_boxing'
    ];
}