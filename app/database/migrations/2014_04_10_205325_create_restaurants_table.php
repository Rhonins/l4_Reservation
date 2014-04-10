<?php
 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateRestaurantsTable extends Migration {
 
    public function up()
    {
        Schema::create('restaurants', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::drop('restaurants');
    }
}