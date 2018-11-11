<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\adminapp;
class CreateAdminappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminapps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('speciality');
            $table->string('doctor');
            $table->string('date');
            $table->string('availability');
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
        Schema::dropIfExists('adminapps');
    }
}
