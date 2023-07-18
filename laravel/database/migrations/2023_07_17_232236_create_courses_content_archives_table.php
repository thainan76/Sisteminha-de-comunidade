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
        Schema::create('courses_content_archives', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_courses_content')->unsigned();
            $table->foreign('id_courses_content')->references('id')->on('courses_content');

            $table->string('name');
            $table->text('url');
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
        Schema::table('courses_content_archives', function (Blueprint $table) {
            if (Schema::hasColumn('courses_content_archives', 'id_courses_content')) {
                $table->dropForeign(['id_courses_content']);
                $table->dropColumn('id_courses_content');
            }

            Schema::dropIfExists('courses_content_archives');
        });
    }
};
