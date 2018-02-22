<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SysUserGroup extends Model
{
    protected $table = 'sys_user_groups';
    protected $fillable = [
        'parent_id',
        'name'
    ];
}
