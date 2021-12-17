<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ScreenNurseScreenCount extends Component
{
    public $taskname;
    public $taskroute;

    public function mount($task,$module){
        $this->taskname = $task->name;
        $this->taskroute = 'dashboard.' . $module->code . '.' . $task->code;
    }
    
    public function render()
    {
        return view('livewire.components.screen-nurse-screen-count');
    }
}
