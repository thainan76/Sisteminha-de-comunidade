<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\API\PermissionController;
use Illuminate\Support\Facades\Route;

class Permissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $routers = [
            "Usuários" => '/api/user/',
            "Permissões" => '/api/permissions'
        ];

        //$routeCollection = Route::getRoutes();

        $requestNew = new Request();
        $requestNew->headers->set('content-type', 'application/json');
        $requestNew->initialize(['id_users_types' => auth()->user()->id_users_types]);

        // get permissions of user
        $permissions = new PermissionController();
        $result = $permissions->getUsersTypesById($requestNew);

        if (!empty($result->getData())) {
            $data = $result->getData();
            if ($data->type) {
                $menus = $data->type->menus;
                foreach ($menus as $menu) {
                    //dd($menu);
                    //dd($routers['thainan']);
                    //dd($request->getRequestUri()); "/api/user/getUsers"
                    //dd($request->getMethod());
                    $uri = $request->getRequestUri();

                    if (!empty($routers[$menu->menuName])) {
                        if (!$menu->create && substr_count($uri, $routers[$menu->menuName]) && $request->getMethod() == "POST") {
                            return response()->json([
                                'status' => 'error',
                                'message' => 'O usuário não pode criar',
                            ], 403);
                        }

                        if (!$menu->read && substr_count($uri, $routers[$menu->menuName]) && ($request->getMethod() == "POST" || $request->getMethod() == "GET")) {
                            return response()->json([
                                'status' => 'error',
                                'message' => 'O usuário não pode visualizar',
                            ], 403);
                        }

                        if (!$menu->update && substr_count($uri, $routers[$menu->menuName]) && $request->getMethod() == "PUT") {
                            return response()->json([
                                'status' => 'error',
                                'message' => 'O usuário não pode atualizar',
                            ], 403);
                        }

                        if (!$menu->delete && $routers[$menu->menuName] && $request->getMethod() == "DELETE") {
                            return response()->json([
                                'status' => 'error',
                                'message' => 'O usuário não pode deletar',
                            ], 403);
                        }
                    }
                }
            }
        }


        return $next($request);
    }
}
