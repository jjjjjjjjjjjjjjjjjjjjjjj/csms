<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('items', function(Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('body');
                $table->bigInteger('cat_id')->nullable();
                $table->bigInteger('generation_id')->nullable();
                $table->bigInteger('capacity_id')->nullable();
                $table->bigInteger('capacity_sub_cat_id')->nullable();
                $table->bigInteger('user_id')->nullable();
                $table->string('price')->nullable();
                $table->string('mrp')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }

}
