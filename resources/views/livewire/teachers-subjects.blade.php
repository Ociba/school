<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
                <th scope="col" wire:click="sortBy('subjects')" style="cursor: pointer;">Subjects
                    @include('partials._sort-icon',['field'=>'subjects'])
                </th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
               @foreach ($view_all_subjects as $i=>$subject)
               @for($s=0; $s<count(get_Teachers_subject(unserialize($subject->subjects))); $s++)
                    <tr>
                        <td> {{$view_all_subjects->firstItem() + $s}} </td>
                        <td class="text-wrap"> {{ get_Teachers_subject(unserialize($subject->subjects))[$s]}} </td>
                        <td>
                             <a href="/teachingstaff/add-mrks/{{$subject->id}}" class="btn btn-sm btn-success">Add Marks</a>
                            <button class="btn btn-sm btn-secondary">edit</button> 
                            <button class="btn btn-sm btn-danger">Delete</button> 
                        </td>
                    </tr>
                    @endfor
                @endforeach
            </tbody>
        </table>
       <div class="d-flex align-classs-center">
            <h5 class="card-title text-lowercase">Showing {{$view_all_subjects->firstItem()}} to {{$view_all_subjects->lastItem()}} out of {{$view_all_subjects->total()}} items</h5>
            <div class="ms-auto">
            {{$view_all_subjects->links()}}
            </div>
        </div>
    </div>
</div>
