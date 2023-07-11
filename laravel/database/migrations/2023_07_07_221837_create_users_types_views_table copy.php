<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_menu_views', function (Blueprint $table) {
            $table->id();
            $table->boolean('create')->default(true);
            $table->boolean('update')->default(true);
            $table->boolean('read')->default(true);
            $table->boolean('delete')->default(true);
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
        Schema::dropIfExists('users_menu_views');
    }
};
