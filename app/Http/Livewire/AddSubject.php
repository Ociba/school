<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Subject;

class AddSubject extends ModalComponent
{
    public $subject;
    public $subject_status;

    protected $rules =[
        'subject'        =>'required|unique:subjects',
        'subject_status' =>'required',
    ];

    public function addSubject(){
        $this->validate();
        Subject::create(array(
          'subject'         =>$this->subject,
          'subject_status'  =>$this->subject_status,
        ));
        session()->flash('success','Subject Added successfully');
    }
    public function render()
    {
       
        return view('livewire.add-subject');
    }
}
