<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;
use App\Models\Level;

class Levels extends Component
{
    use WithPagination, WithSorting;

    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'level';
    public $search = '';

    public function render()
    {
        $all_levels = $this->getLevels();
        return view('livewire.levels',compact('all_levels'));
    }

    /**
     * This function gets all the levels
     */
    private function getLevels(){
        $search = '%'.$this->search.'%';
        return Level::orderBy($this->sortBy, $this->sortDirection)
        ->where('levels.level','like',$search)
        ->Paginate($this->perPage);
    }
}
