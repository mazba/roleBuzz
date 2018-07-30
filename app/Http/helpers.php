<?php
/******************************************
*   Created by m@zba on 2/25/18.
*	Custom Helper Function File
*
******************************************/

use App\Model\Role\SysGroupPermissions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

if (! function_exists('readMoreString')) {
    function readMoreString($str,$limit=40){
        if(strlen($str)>$limit){
            $stringCut = substr($str, 0, $limit);
            $serRpos = strrpos($stringCut, ' ');
            $first_part = substr(substr($str, 0, $limit), 0,$serRpos);
            $last_part = substr($str,$serRpos);
            return $first_part.'<span title="Show More" class="hidden-more-text" onclick="showText(this)"> >><span>'.$last_part.'</span></span>';
        }
        else
            return $str;
    }
}
if (! function_exists('getRoles')) {
    function getRoles(){
        if(!Cache::has(config('sys.role_cache'))){
            Cache::rememberForever(config('sys.role_cache'), function() {
                return SysGroupPermissions::all()->toArray();
            });
        }
        return Cache::get(config('sys.role_cache'));
    }
}if (! function_exists('getRolesByGroupId')) {
    function getRolesByGroupId($group_id){
        $cache_key = config('sys.role_cache').'_'.$group_id;
        if(!Cache::has($cache_key)){
            Cache::rememberForever($cache_key, function() use($group_id) {
                return SysGroupPermissions::where('sys_group_id',$group_id)->get();
            });
        }
        return Cache::get($cache_key);
    }
}
