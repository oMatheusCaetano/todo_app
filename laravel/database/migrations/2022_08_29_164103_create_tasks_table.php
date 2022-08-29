<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('title')->unique();
            $table->string('userId');
            $table->string('categoryId');
            $table->timestamp('createdAt')->useCurrent();
            $table->timestamp('updatedAt')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('categoryId')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
