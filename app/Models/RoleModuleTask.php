<?php

namespace App\Models;

use App\Models\Resource\Task;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleModuleTask extends Pivot
{
    use HasFactory;
    // public function task(){
    //    return $this->belongsTo(Task::class,'task_id');
    // }
}
