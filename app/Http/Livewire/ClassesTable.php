<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use App\Models\PrimaryClass;

class ClassesTable extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'level';
    public $search = '';

    public function render()
    {
        $all_classes = $this->getClasses(); 
        return view('livewire.classes-table', compact('all_classes'));
    }
    /**
     * this function gets the classes
     */
    private function getClasses(){
        return PrimaryClass::join('levels','levels.id','primary_classes.level_id')
        ->orderBy($this->sortBy, $this->sortDirection)
        ->search($this->search)
        ->Paginate($this->perPage,['primary_classes.*','levels.level']);
    }
}
