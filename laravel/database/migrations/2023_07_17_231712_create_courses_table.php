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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image_course')->nullable();
            $table->longText('description');
            $table->unsignedBigInteger('id_author')->unsigned();
            $table->foreign('id_author')->references('id')->on('users');
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
        Schema::table('courses', function (Blueprint $table) {
            if (Schema::hasColumn('courses', 'id_author')) {
                $table->dropForeign(['id_users']);
                $table->dropColumn('id_author');
            }

            Schema::dropIfExists('courses');
        });
    }
};
