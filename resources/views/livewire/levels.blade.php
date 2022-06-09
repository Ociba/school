<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="d-flex align-items-center">
        <div class="ms-auto">
        <button onclick="Livewire.emit('openModal', 'levels-form')" class="btn btn-info  m-l-15 text-white mb-3"><i class="icon-plus"></i> Add Levels</button>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div class="d-md-flex align-items-center mt-3">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Entries</label>
                    <select class="form-control form-select" data-placeholder="Choose a Category" tabindex="1" wire:model="perPage">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div>
            
            <div class="ms-auto mt-3 mt-md-0">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Search Entries</label>
                        <input wire:model="search" type="text" class="form-control" placeholder="Search" tabindex="1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col" wire:click="sortBy('levels.id')" style="cursor: pointer;">#
                        @include('partials._sort-icon',['field'=>'levels.id'])
                    </th>
                    <th scope="col" wire:click="sortBy('level')" style="cursor: pointer;">Level
                        @include('partials._sort-icon',['field'=>'level'])
                    </th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_levels as $i=>$level)
                <tr>
                    <td> {{$all_levels->firstItem() + $i}} </td>
                    <td style="text-transform: capitalize"> {{$level->level}} </td>
                    <td>
                        <button class="btn btn-sm btn-secondary">edit</button> 
                        <button class="btn btn-sm btn-danger">Delete</button> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex align-classs-center">
            <h5 class="card-title text-lowercase">Showing {{$all_levels->firstItem()}} to {{$all_levels->lastItem()}} out of {{$all_levels->total()}} items</h5>
            <div class="ms-auto">
            {{$all_levels->links()}}
            </div>
        </div>
    </div>
</div>
