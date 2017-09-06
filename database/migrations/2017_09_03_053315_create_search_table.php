<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('search', function(Blueprint $table) {
                $table->increments('id');
                $table->string('ipaddress');
$table->bigInteger('item_id');
$table->bigInteger('user_id');
$table->string('search_type');

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
        Schema::drop('search');
    }

}
