<?php

namespace App\Http\Middleware;

use App\Model\SysGroupPermissions;
use Closure;
use function foo\func;
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
        if(!Cache::get('prole')){
            Cache::remember('prole', 15, function() {
                return SysGroupPermissions::all()->toArray();
            });
        }
        $roles=Cache::get('prole');
        $roles=collect($roles);
        $route = $request->route();
        $hasRole=$roles->search(function($item,$key) use($route){
            return (isset($route->action['as'])&&$route->action['as']==$item['as']) ||
                ($route->uri == $item['uri']&&implode(',',$route->methods)==$item['http_verbs']);
        });
        return $next($request);
    }
}
