<?php

namespace App\Models\Resource;

use App\Models\User;
use App\Models\RoleModuleTask;
use App\Models\Resource\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'role_users');
    // }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'role_modules','role_id','module_id');
    }

    // public function modules(){
    //     return $this->belongsToMany(Module::class,'role_module_tasks','role_id','module_id')
    //                 ->withPivot(['permission','task_id'])
    //                 ->using(RoleModuleTask::class);
    // }

    public function getActiveMenuModuleAttribute(){
        return $this->modules->where('function_type_id',1)->where('is_active',1);
    }
}
