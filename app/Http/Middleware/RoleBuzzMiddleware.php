<?php

namespace App\Http\Middleware;

use App\Model\SysGroupPermissions;
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
        if(!Cache::get(config('sys.role_cache'))){
            Cache::rememberForever(config('sys.role_cache'), function() {
                return SysGroupPermissions::all()->toArray();
            });
        }
        $roles=Cache::get(config('sys.role_cache'));
        $roles=collect($roles);
        $route = $request->route();
        $hasRole=$roles->search(function($item,$key) use($route){
            return (isset($route->action['as'])&&$route->action['as']==$item['as']&&Auth::user()->sys_group_id==$item['sys_group_id']) ||
                ($route->uri == $item['uri']&&implode(',',$route->methods)==$item['http_verbs']&&Auth::user()->sys_group_id==$item['sys_group_id']);
        });
        return $hasRole!==false ?$next($request):response('Unauthorized','401');
    }
}
