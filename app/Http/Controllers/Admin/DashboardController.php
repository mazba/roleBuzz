<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = \Route::getRoutes();
        $d = [];
        foreach($routes as $key=>$route){
            $all_routes[]=[
                'uri'=>$route->uri,
                'methods'=>$route->methods,
                'action'=>$route->action,
            ];
        }
        echo '<pre>';print_r($all_routes);die;
        return view('admin.Dashboard.index');
    }
}
