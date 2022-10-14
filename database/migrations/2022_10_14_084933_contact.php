<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('mess_name');
            $table->string('mess_email');
            $table->string('mess_phone')->unique();
            $table->string('mess');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('contact');
    }
};
