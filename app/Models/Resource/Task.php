<?php

namespace App\Models\Resource;

use App\Models\Resource\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    // public function modules()
    // {
    //     return $this->belongsToMany(Module::class, 'module_tasks','task_id','module_id'); 
    // }

    public function componentName($modulecode,$taskcode){
      return 'components.' . str_replace("_","-",$modulecode) .'-'.str_replace("_","-",$taskcode) .'-count';
    }

}
