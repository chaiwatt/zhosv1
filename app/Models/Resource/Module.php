<?php

namespace App\Models\Resource;

use App\Models\Resource\Role;
use App\Models\Resource\Task;
use App\Models\Resource\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'role_modules');
    // }

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'module_tasks','module_id','task_id');
    }


}
