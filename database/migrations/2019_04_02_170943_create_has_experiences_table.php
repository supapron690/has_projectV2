<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_experiences', function (Blueprint $table) {
            
            $table->bigIncrements('exp_id');
            $table->string('exp_type', 255);
            $table->string('exp_name',255);
            $table->string('exp_description');
            $table->string('exp_mem_id');
            $table->date('exp_date');
            $table->time('exp_time');
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
        Schema::dropIfExists('has_experiences');
    }
}
