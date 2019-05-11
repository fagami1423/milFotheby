<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id')->length(8);
            $table->integer('admin_id')->unsigned();
            $table->integer('cat_id')->unsigned();
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

        DB::statement('ALTER TABLE items AUTO_INCREMENT = 10000000;');
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
