<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_items', function (Blueprint $table) {
            $table->increments('id')->length(8);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('admin_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('artist');
            $table->integer('year_produced');
            $table->string('subject');
            $table->string('description');
            $table->date('auction_date')->nullable();
            $table->integer('estimated_price');
            $table->string('property');
            $table->string('art_image');
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
        Schema::dropIfExists('request_items');
    }
}
