<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_members', function (Blueprint $table) {
            $table->bigIncrements('mem_id');
            $table->string('mem_account')->unique();
            $table->string('mem_username')->unique();
            $table->string('mem_phone');
            $table->string('mem_password');
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
        Schema::dropIfExists('has_members');
    }
}
