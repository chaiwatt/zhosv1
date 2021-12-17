<?php

namespace App\Http\Livewire\Registry\Opdcard;

use Livewire\Component;

class OpdcardDetail extends Component
{
    public $state = [];
    public $quantity = 'this is ok';

    public function createPatient(){
        dd('here');
    }

    public function render()
    {
        return view('livewire.registry.opdcard.opdcard-detail');
    }
}
