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
        Schema::create('courses_content', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_courses')->unsigned();
            $table->foreign('id_courses')->references('id')->on('courses');

            $table->unsignedBigInteger('id_courses_types')->unsigned();
            $table->foreign('id_courses_types')->references('id')->on('courses_types');

            $table->string('name');
            $table->text('url');
            $table->longText('description');
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
        Schema::table('courses_content', function (Blueprint $table) {
            if (Schema::hasColumn('courses_content', 'id_courses')) {
                $table->dropForeign(['id_courses']);
                $table->dropColumn('id_courses');
            }

            if (Schema::hasColumn('courses_content', 'id_courses_types')) {
                $table->dropForeign(['id_courses_types']);
                $table->dropColumn('id_courses_types');
            }

            Schema::dropIfExists('courses_content');
        });
    }
};
