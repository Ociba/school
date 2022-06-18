<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Committee;

class EditCommittee extends ModalComponent
{

    public $committee_name;
    public $committee_id;

    protected $rules =[
        'committee_name'=>'required'
         ];

    public function render()
    {
        return view('livewire.edit-committee');
    }

    public function mount($committee_id){
         $this->fill([
            'committee_name' => Committee::where('id',$committee_id)->value('committee_name'),
        ]);
    }
    public function update(){
        // Validate request
        $this->validate();
        $this->emit('AllCommittees','refreshComponent');
            // Update committee
            Committee::where('id',$this->committee_id)->update(array(
                'committee_name'=>$this->committee_name
            ));
            //$this->emit('update');
            session()->flash('success','Committee Updated Successfully!!');
            
            $this->dispatchBrowserEvent('EditCommittee');


        }
}
