<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use App\Models\Student;

class AllStudentsRegistrationData extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'registration_number';
    public $search = '';


    public function render()
    {
        $all_students =$this->getAllStudents();
        return view('livewire.all-students-registration-data',compact('all_students'));
    }
      /*
    * this function gets the all students
    */
   private function getAllStudents(){
    return Student::join('primary_classes','primary_classes.id','students.user_category')
    ->orderBy($this->sortBy, $this->sortDirection)
    ->search($this->search)
    ->Paginate($this->perPage,['students.*','primary_classes.class']);
}
}
