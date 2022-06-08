<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\PrimaryClass;

class Classes extends ModalComponent
{
    public $class;
    public $category;

    protected $rules =[
        'class'      =>'required',
        'category'   =>'required',
    ];

    public function savePrimaryClass(){
        $this->validate();
        PrimaryClass::create(array(
        'class'     =>$this->class,
        'category'  =>$this->category,
        ));
        session()->flash('success','Class has been Created successfully');
    }
    public function render()
    {
        return view('livewire.classes');
    }
}
