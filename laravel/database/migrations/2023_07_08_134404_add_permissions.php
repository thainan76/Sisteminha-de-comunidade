<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert some stuff
        DB::table('users_types')->insert([
            array(
                'name' => 'Administrador'
            ),
            array(
                'name' => 'Cliente'
            ),
        ]);

        DB::table('users_menus')->insert([
            array(
                'menu' => 'Usuários'
            ),
            array(
                'menu' => 'Permissões'
            )
        ]);

        DB::table('users_menu_views')->insert([
            array(
                'create' => true,
                'update' => true,
                'read' => true,
                'update' => true,
            ),
            array(
                'create' => true,
                'update' => true,
                'read' => true,
                'update' => true,
            ),
            array(
                'create' => false,
                'update' => false,
                'read' => true,
                'update' => false,
            ),
            array(
                'create' => false,
                'update' => false,
                'read' => false,
                'update' => false,
            ),
        ]);

        DB::table('users_types_menus_rel')->insert([
            array(
                'id_users_types' => 1,
                'id_users_menus' => 1,
                'id_users_menu_views' => 1
            ),
            array(
                'id_users_types' => 1,
                'id_users_menus' => 2,
                'id_users_menu_views' => 2
            ),
            array(
                'id_users_types' => 2,
                'id_users_menus' => 1,
                'id_users_menu_views' => 3
            ),
            array(
                'id_users_types' => 2,
                'id_users_menus' => 2,
                'id_users_menu_views' => 4
            )
        ]);

        DB::table('users')->insert([
            'id_users_types' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '99999999999',
            'cpf' => '99999999999',
            'avatar' => null,
            'email_verified_at' => null,
            'password' => Hash::make('senha123'), // password secret
            'remember_token' => Str::random(10),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
