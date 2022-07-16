<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->decimal('daily_price', 8, 2);
            $table->tinyInteger('square_meters')->nullable();
            $table->tinyInteger('rooms_number')->nullable();
            $table->tinyInteger('beds_number')->nullable();
            $table->tinyInteger('bathrooms_number')->nullable();
            $table->text('image');
            $table->boolean('visibility')->nullable();
            $table->string('address', 255)->nullable();    //->unique()
            $table->smallInteger('longitude')->nullable();  //->unique()
            $table->smallInteger('latitude')->nullable();   //->unique()
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
        Schema::dropIfExists('apartments');
    }
}
