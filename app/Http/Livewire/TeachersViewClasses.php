<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use App\Models\TeachingStaff;
use App\Models\User;

class TeachersViewClasses extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'class';
    public $search = '';

    public function render()
    {
        $view_all_classes =$this->viewAllClasses();
        return view('livewire.teachers-view-classes',compact('view_all_classes'));
    }
     /**
     * this function gets the classes
     */
    private function viewAllClasses(){
        $search = '%'.$this->search.'%'; 
        return TeachingStaff::join('users','users.contact','teaching_staff.contact')
        ->join('primary_classes','primary_classes.id','teaching_staff.class_one')
        ->orderBy($this->sortBy, $this->sortDirection)
        // ->where('users.contact','teaching_staff.contact')
        ->where('users.id',auth()->user()->id)
        ->where('primary_classes.class','like',$search)
        ->Paginate($this->perPage,['primary_classes.*']);
    }
}
