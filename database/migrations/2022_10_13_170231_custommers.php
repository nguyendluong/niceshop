<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('custommers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->integer('is_active')->default(0);
            $table->integer('is_block')->default(0);
            $table->string('hash')->nullable();
            $table->string('hash_reset')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('custommers');
    }
};
