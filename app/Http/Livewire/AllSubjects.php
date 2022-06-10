<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use App\Models\Subject;

class AllSubjects extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'subject';
    public $search = '';

    public function render()
    {
        $all_subjects =$this->getSubjects();
        return view('livewire.all-subjects',compact('all_subjects'));
    }
    /*
    * this function gets the all subjects
    */
   private function getSubjects(){
       $search = '%'.$this->search.'%';
       return Subject::orderBy($this->sortBy, $this->sortDirection)
       ->where('subject','like',$search)
       ->Paginate($this->perPage);
   }
}
