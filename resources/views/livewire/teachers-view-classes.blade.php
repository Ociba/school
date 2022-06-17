<div>
    {{-- The whole world belongs to you. --}}
    <div class="d-flex align-classs-center">
        <div class="ms-auto">
        <button onclick="Livewire.emit('openModal', 'classes')" class="btn btn-info  m-l-15 text-white mb-3"><i class="icon-plus"></i> Add Class</button>
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
                <th scope="col" wire:click="sortBy('primary_classes.id')" style="cursor: pointer;">#
                    @include('partials._sort-icon',['field'=>'primary_classes.id'])
                </th>
                <th scope="col" wire:click="sortBy('class')" style="cursor: pointer;">Class
                    @include('partials._sort-icon',['field'=>'class'])
                </th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
               @foreach ($view_all_classes as $i=>$class)
                <tr>
                    <td> {{$view_all_classes->firstItem() + $i}} </td>
                    <td class="text-wrap"> {{$class->class}} </td>
                    <td>
                        <a href="/teachingstaff/view-subjects/{{$class->id}}" class="btn btn-sm btn-info">View Subjects</a> 
                        <button class="btn btn-sm btn-secondary">edit</button> 
                        <button class="btn btn-sm btn-danger">Delete</button> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       <div class="d-flex align-classs-center">
            <h5 class="card-title text-lowercase">Showing {{$view_all_classes->firstItem()}} to {{$view_all_classes->lastItem()}} out of {{$view_all_classes->total()}} items</h5>
            <div class="ms-auto">
            {{$view_all_classes->links()}}
            </div>
        </div>
    </div>
</div>
