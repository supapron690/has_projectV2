<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasHealthArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_health_articles', function (Blueprint $table) {
            $table->bigIncrements('ha_id');
            $table->string('ha_name', 255);
            $table->string('ha_content');
            $table->string('ha_Image');
            $table->string('ha_type',255);
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
        Schema::dropIfExists('has_health_articles');
    }
}
