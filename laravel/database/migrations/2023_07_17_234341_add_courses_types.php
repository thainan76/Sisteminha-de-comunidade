<?php

use App\Models\UsersMenus;
use App\Models\UsersTypes;
use App\Models\UsersMenuViews;
use App\Models\UsersTypesMeusRel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // inicia o transition
        DB::beginTransaction();

        DB::table('courses_types')->insert([
            array(
                'name' => 'Vídeo'
            )
        ]);

        $users_menus = UsersMenus::create([
            'menu' => 'Cursos'
        ]);

        $users_types = UsersTypes::get();

        foreach ($users_types as $userType) {
            $users_menu_views = UsersMenuViews::create([
                'create' => $userType->id == 1 ? true : false,
                'update' => $userType->id == 1 ? true : false,
                'read' => $userType->id == 1 ? true : false,
                'delete' => $userType->id == 1 ? true : false,
            ]);

            UsersTypesMeusRel::create([
                'id_users_types' => $userType['id'],
                'id_users_menus' => $users_menus['id'],
                'id_users_menu_views' => $users_menu_views->id
            ]);
        }


        // realiza a alteração no DB
        DB::commit();
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
