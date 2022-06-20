<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use App\Models\TeachingStaff;
use App\Models\User;

class TeachersSubjects extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'subjects';
    public $search = '';

    public function render()
    {
        $view_all_subjects =$this->viewAllSubjects();
        return view('livewire.teachers-subjects',compact('view_all_subjects'));
    }
     /**
     * this function gets the subjects
     */
    private function viewAllSubjects(){
        return TeachingStaff::join('users','users.contact','teaching_staff.contact')
        ->orderBy($this->sortBy, $this->sortDirection)
        ->where('users.id',auth()->user()->id)
        ->search($this->search)
        ->Paginate($this->perPage,['teaching_staff.*']);
    }
}
