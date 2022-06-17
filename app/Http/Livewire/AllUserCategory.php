<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserCategory;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class AllUserCategory extends Component
{
    use WithSorting,WithPagination;

    protected $listeners =['AllUserCategory' =>'$refresh'];

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'category';
    public $search = '';

    public function render()
    {
        $user_category =$this->getCategories();
        return view('livewire.all-user-category',compact('user_category'));
    }
      /*
    * this function gets the all Category
    */
    private function getCategories(){
    return UserCategory::orderBy($this->sortBy, $this->sortDirection)
    ->search($this->$search)
    ->Paginate($this->perPage);
}
}
