<?php

namespace App\Model\Role;

use Illuminate\Database\Eloquent\Model;

class SysMenu extends Model
{
    protected $table = 'sys_menu';
    protected $guarded = [
        'id',
        'created',
        'modified'
    ];
    public function parent(){
        return $this->belongsTo('App\Model\Role\SysMenu','parent_id');
    }
}
