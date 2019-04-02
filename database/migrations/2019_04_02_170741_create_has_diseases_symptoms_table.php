<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasDiseasesSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_diseases_symptoms', function (Blueprint $table) {
            
            $table->bigIncrements('ds_id');
            $table->string('ds_type', 255);
            $table->string('ds_name',255);
            $table->string('ds_content');
            $table->string('ds_Image');
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
        Schema::dropIfExists('has_diseases_symptoms');
    }
}
