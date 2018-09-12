<?php

namespace App\Http\Middleware;

use App\Model\Role\SysGroupPermissions;
use Closure;
use function foo\func;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class RoleBuzzMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $route = $request->route();
        $user_group_id = Auth::user()->sys_group_id;
        $roles = collect(getRoles());
        //TODO:: need to improve code for checking
        $hasRole = $roles->search(function($item,$key) use($route,$user_group_id){
            return (isset($route->action['as'])&&$route->action['as']==$item['as']&&$user_group_id==$item['sys_group_id']) ||
                ($route->uri == $item['uri']&&implode(',',$route->methods)==$item['http_verbs']&&$user_group_id==$item['sys_group_id']);
        });
        return $hasRole!==false ?$next($request):response('Unauthorized','401');
    }
}
