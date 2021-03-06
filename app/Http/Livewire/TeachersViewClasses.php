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

    public $sortBy = 'class_one';
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
        return TeachingStaff::join('users','users.contact','teaching_staff.contact')
        ->orderBy($this->sortBy, $this->sortDirection)
        // ->where('users.contact','teaching_staff.contact')
        ->where('users.id',auth()->user()->id)
        ->search($this->search)
        ->Paginate($this->perPage,['teaching_staff.*']);
    }
}
