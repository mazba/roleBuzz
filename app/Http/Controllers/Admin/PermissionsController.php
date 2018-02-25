<?php

namespace App\Http\Controllers\Admin;

use App\Model\SysUserGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Permissions.index',['users'=>SysUserGroup::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Permissions.create',['users'=>SysUserGroup::pluck('name','id')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_group = new SysUserGroup();
        $validatedData = $this->validate($request,[
            'name' => 'required|unique:sys_user_groups|max:255'
        ]);
        $user_group->name = $request->name;
        //       $user_group->created_by ='';//TODO:: have to add auth
        $user_group->save();
        $request->session()->flash('status', __('saved successfully'));
        return redirect()->route('permissions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buildPermission($id)
    {
        $routes = \Route::getRoutes();
        $group = SysUserGroup::findOrFail($id);
        foreach($routes as $key=>$route){
            $all_routes[]=[
                'uri'=>$route->uri,
                'methods'=>$route->methods,
                'action'=>$route->action,
            ];
        }
//        dd($all_routes);
        return view('admin.Permissions.build_permission',compact('routes','group'));
    }
}
