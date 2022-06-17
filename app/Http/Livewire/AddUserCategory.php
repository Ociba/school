<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserCategory;
use LivewireUI\Modal\ModalComponent;
use Session;

class AddUserCategory extends ModalComponent
{
    public $category;

    //validate category
    protected $rules =[
        'category' =>'required|unique:user_categories',
    ];

    public function craeteUserCategory(){
        $this->validate();
        $this->emit('AllUserCategory','refreshComponent');

        UserCategory::create(array(
            'category'  =>$this->category,
        ));
        session()->flash('success','Category created successfuully');
    }
    public function render()
    {
        return view('livewire.add-user-category');
    }
}
