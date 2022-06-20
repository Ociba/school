<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use App\Models\Student;

class PupilsListForMarks extends Component
{
    use WithPagination, WithSorting;

    public $class_id;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'name';
    public $search = '';

    public function render()
    {
        $get_pupils_for_this_class =$this->getPupilsForMarks();
        return view('livewire.pupils-list-for-marks',compact('get_pupils_for_this_class'));
    }

    public function mount($class_id){
        $this->class_id = $class_id;
    }
      /**
     * This function gets the pupils for particular Class
     */
    private function getPupilsForMarks(){
        return Student::join('primary_classes','primary_classes.id','students.class_id')
        ->whereClassId($this->class_id)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
        ->Paginate($this->perPage,['students.*']);
    }
}
