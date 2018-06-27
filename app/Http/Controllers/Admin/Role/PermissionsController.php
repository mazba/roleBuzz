<?php

namespace App\Http\Controllers\Admin\Role;

use App\Model\SysGroupPermissions;
use App\Model\SysUserGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.role.permissions.index',['users'=>SysUserGroup::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.permissions.create',['users'=>SysUserGroup::pluck('name','id')]);
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
     * Show the form for permission the specified resource.
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
        $user_group_permissions = new SysGroupPermissions();
        $user_group_permissions=$user_group_permissions->where(['sys_group_id'=>$id])->get()->toArray();
        return view('admin.role.permissions.build_permission',compact('user_group_permissions','id','routes','group'));
    }
    /**
     * Set the form for permission the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setPermission(Request $request,$id)
    {
        $user_group_permissions = new SysGroupPermissions();
        $user_group_permissions->where(['sys_group_id'=>$id])->delete();
        $validatedData = $this->validate($request,[
            'routes.*.uri' => 'required',
            'routes.*.http_verbs' => 'required'
        ]);
        $inputs = $request->routes;
        foreach ($inputs as $key=>&$input){
            if(!isset($input['checked']))
                unset($inputs[$key]);
            else{
                unset($input['checked']);
                $input['sys_group_id'] = $id;
            }
        }
        SysGroupPermissions::insert($inputs);
        Cache::forget(config('sys.role_cache'));
        $request->session()->flash('status', __('Permission has been saved Successfully'));
        return redirect()->route('permissions');
    }
}
