<?php

namespace App\Http\Livewire;
use LivewireUI\Modal\ModalComponent;
use App\Models\Level;

use Livewire\Component;

class LevelsForm extends ModalComponent
{
    public $level;

    protected $rules =[
        'level' =>'required|unique:levels'
    ];

    public function createLevel(){
        $this->validate();
        Level::create(array(
        'level'     =>$this->level,
        ));
        session()->flash('success','Level has been Created successfully');
    }

    public function render()
    {
        return view('livewire.levels-form');
    }
}
