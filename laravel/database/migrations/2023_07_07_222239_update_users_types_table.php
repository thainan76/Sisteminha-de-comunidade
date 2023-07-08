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
        Schema::table('users_types', function (Blueprint $table) {
            $table->unsignedBigInteger('id_users_types_permissions')->nullable()->unsigned()->after('id');
            $table->foreign('id_users_types_permissions')->references('id')->on('users_types_permissions')->onDelete('cascade');;

            $table->unsignedBigInteger('id_users_types_views')->nullable()->unsigned()->after('id');
            $table->foreign('id_users_types_views')->references('id')->on('users_types_views')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_types', function (Blueprint $table) {
            $table->dropForeign(['id_users_types_permissions']);
            $table->dropColumn('id_users_types_permissions');
            $table->dropForeign(['id_users_types_views']);
            $table->dropColumn('id_users_types_views');
        });
    }
};
