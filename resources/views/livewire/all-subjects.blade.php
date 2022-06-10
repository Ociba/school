<div>
    {{-- In work, do what you enjoy. --}}
    <div class="d-flex align-classs-center">
        <div class="ms-auto">
        <button onclick="Livewire.emit('openModal', 'add-subject')" class="btn btn-info  m-l-15 text-white mb-3"><i class="icon-plus"></i> Add Subject</button>
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
                <th scope="col" wire:click="sortBy('subjects.id')" style="cursor: pointer;">#
                    @include('partials._sort-icon',['field'=>'subjects.id'])
                </th>
                <th scope="col" wire:click="sortBy('subject_status')" style="cursor: pointer;">Subject Status
                    @include('partials._sort-icon',['field'=>'subject_status'])
                </th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
               @foreach ($all_subjects as $i=>$subjects)
                <tr>
                    <td> {{$all_subjects->firstItem() + $i}} </td>
                    <td class="text-wrap"> {{$subjects->subject}} </td>
                    <td style="text-transform: capitalize"> {{$subjects->subject_status}} </td>
                    <td>
                        <button class="btn btn-sm btn-secondary">edit</button> 
                        <button class="btn btn-sm btn-danger">Delete</button> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       <div class="d-flex align-classs-center">
            <h5 class="card-title text-lowercase">Showing {{$all_subjects->firstItem()}} to {{$all_subjects->lastItem()}} out of {{$all_subjects->total()}} items</h5>
            <div class="ms-auto">
            {{$all_subjects->links()}}
            </div>
        </div>
    </div>
</div>
