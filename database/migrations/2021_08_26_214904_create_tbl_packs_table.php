<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_packs', function (Blueprint $table) {
            $table->id();
            
            $table->string('post_category',100);
            $table->string('post_price');
            $table->string('post_month',255);
            $table->string('post_cardio',255);
            $table->string('post_swimming',100);
            $table->string('post_yoga',100);
            $table->string('post_zumba');
            $table->string('post_massage',255);
            $table->string('post_boxing',255);
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_packs');
    }
}