<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Committee;

class AddCommittee extends ModalComponent
{
    public $committee_name;


    protected $rules =[
        'committee_name'  =>'required|unique:committees',
    ];
    public function createCommittee(){
        $this->validate();
        $this->emit('AllCommittees','refreshComponent');
        
        Committee::create(array(
        'committee_name'     =>$this->committee_name,
        ));
        session()->flash('success','Committee has been Created successfully');
    }
    public function render()
    {
        return view('livewire.add-committee');
    }
}
