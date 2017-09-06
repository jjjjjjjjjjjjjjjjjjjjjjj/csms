<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCapacitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('capacities', function(Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->bigInteger('cat_id');
                 $table->bigInteger('c_parent_id');
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
        Schema::drop('capacities');
    }

}
