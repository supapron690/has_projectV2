<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_hospitals', function (Blueprint $table) {
           
            $table->bigIncrements('hos_id');
            $table->string('hos_name', 255);
            $table->string('hos_address');
            $table->string('hos_phone');
<<<<<<< HEAD
            $table->string('hos_coo_id');
=======
            $table->string('has_province');
            $table->string('has_District');
            $table->string('has_web');
            $table->string('has_latitude');
            $table->string('has_longitude');
            $table->string('has_longitude');
>>>>>>> 65d9d0ed7e9a28ae57f7451e932c37659eba6308
            $table->rememberToken();
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
        Schema::dropIfExists('has_hospitals');
    }
}
