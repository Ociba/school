<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TeachingStaff as Staff;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class TeachingStaff extends Component
{
    use WithPagination, WithSorting;
    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'teachers_registration_number';
    public $search = '';

    public function render()
    {
        $teaching_staff_info=$this->getTeachingStaff();
        return view('livewire.teaching-staff',compact('teaching_staff_info'));
    }
      /*
    * this function gets the all students
    */
   private function getTeachingStaff(){
    return Staff:://join('subjects','subjects.id','teaching_staff.subjects')
     orderBy($this->sortBy, $this->sortDirection)
     ->search($this->search)
    ->Paginate($this->perPage,['teaching_staff.*']);
    }
}
