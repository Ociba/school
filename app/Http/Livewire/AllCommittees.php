<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Committee;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class AllCommittees extends Component
{
    use WithSorting, WithPagination;
    
    protected $listeners =['AllCommittees' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'committee_name';
    public $search = '';

    public function render()
    {
        $get_committees =$this->getcommittees();
        return view('livewire.all-committees',compact('get_committees'));
    }
      /*
    * this function gets the all committes
    */
   private function getcommittees(){
    $search = '%'.$this->search.'%';
    return Committee::orderBy($this->sortBy, $this->sortDirection)
    ->where('committee_name','like',$search)
    ->Paginate($this->perPage);
}
}
