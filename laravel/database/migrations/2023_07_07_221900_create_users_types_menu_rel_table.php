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
        Schema::create('users_types_menus_rel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users_types')->unsigned();
            $table->foreign('id_users_types')->references('id')->on('users_types')->onDelete('cascade');

            $table->unsignedBigInteger('id_users_menus')->unsigned();
            $table->foreign('id_users_menus')->references('id')->on('users_menus')->onDelete('cascade');

            $table->unsignedBigInteger('id_users_menu_views')->unsigned();
            $table->foreign('id_users_menu_views')->references('id')->on('users_menu_views')->onDelete('cascade');
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
        Schema::table('users_types_menus_rel', function (Blueprint $table) {
            if (Schema::hasColumn('users_types_menus_rel', 'id_users_types')) {
                $table->dropForeign(['id_users_types']);
                $table->dropColumn('id_users_types');
            }

            if (Schema::hasColumn('users_types_menus_rel', 'id_users_menus')) {
                $table->dropForeign(['id_users_menus']);
                $table->dropColumn('id_users_menus');
            }

            if (Schema::hasColumn('users_types_menus_rel', 'id_users_menu_views')) {
                $table->dropForeign(['id_users_menu_views']);
                $table->dropColumn('id_users_menu_views');
            }

            Schema::dropIfExists('users_types_menus_rel');

        });
    }
};
