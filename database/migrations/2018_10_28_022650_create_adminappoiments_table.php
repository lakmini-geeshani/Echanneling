<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Adminappoiment;
use App\special;
use App\doctor;
use App\available;
class CreateAdminappoimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminappoiments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('speciality_id');
            $table->string('doctor_id');
            $table->integer('date');
            $table->string('availability_id');
            $table->timestamps();

           // $table->foreign('speciality_id')->references('id')->on('specials')->onDelete('CASCADE');
            //$table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('CASCADE');
           // $table->foreign('availability_id')->references('id')->on('availables')->onDelete('CASCADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminappoiments');
    }
}
