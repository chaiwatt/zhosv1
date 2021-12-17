<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class RegistryPatientDeathCount extends Component
{
    public $taskname;
    public $taskroute;

    public function mount($task,$module){
        $this->taskname = $task->name;
        $this->taskroute = 'dashboard.' . $module->code . '.' . $task->code;
    }
     
    public function render()
    {
        return view('livewire.components.registry-patient-death-count');
    }
}
