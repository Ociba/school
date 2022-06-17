<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NonTeachingStaff as Staff;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class NonTeachingStaff extends Component
{
    use WithPagination, WithSorting;
    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'name';
    public $search = '';
    public function render()
    {
        $non_teaching_staff_info=$this->getNonTeachingStaff();
        return view('livewire.non-teaching-staff',compact('non_teaching_staff_info'));
    }
       /*
    * this function gets the all non teaching staff
    */
   private function getNonTeachingStaff(){
    return Staff::join('user_categories','user_categories.id','non_teaching_staff.user_category')
     ->orderBy($this->sortBy, $this->sortDirection)
    ->search($this->search)
    ->Paginate($this->perPage,['non_teaching_staff.*','user_categories.category']);
    }
}
