<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\PrimaryClass;
use App\Models\Level;

class Classes extends ModalComponent
{
    public $class;
    public $level_id;

    protected $rules =[
        'class'      =>'required|unique:primary_classes',
        'level_id'   =>'required',
    ];

    public function savePrimaryClass(){
        $this->validate();
        PrimaryClass::create(array(
        'class'     =>$this->class,
        'level_id'  =>$this->level_id,
        ));
        session()->flash('success','Class has been Created successfully');
    }
    public function render()
    {
        return view('livewire.classes',[
            'level' =>Level::get()
        ]);
    }
}
