<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="d-flex align-classs-center">
        <div class="ms-auto">
        <a href="/academics/add-teaching-staffs" class="btn btn-info  m-l-15 text-white mb-3"><i class="icon-plus"></i> Add Teaching Staff</a>
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
                <th scope="col" wire:click="sortBy('teaching_staff.id')" style="cursor: pointer;">#
                    @include('partials._sort-icon',['field'=>'teaching_staff.id'])
                </th>
                <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Name
                    @include('partials._sort-icon',['field'=>'name'])
                </th>
                <th scope="col" wire:click="sortBy('sex')" style="cursor: pointer;">Gender
                    @include('partials._sort-icon',['field'=>'sex'])
                </th>
                <th scope="col" wire:click="sortBy('dob')" style="cursor: pointer;">Date Of Birth
                    @include('partials._sort-icon',['field'=>'dob'])
                </th>
                <th scope="col" wire:click="sortBy('teachers_registration_number')" style="cursor: pointer;">Reg No.
                    @include('partials._sort-icon',['field'=>'teachers_registration_number'])
                </th>
                <th scope="col" wire:click="sortBy('class_one')" style="cursor: pointer;">Classes
                    @include('partials._sort-icon',['field'=>'class_one'])
                </th>
                <th scope="col" wire:click="sortBy('subjects')" style="cursor: pointer;">Subjects
                    @include('partials._sort-icon',['field'=>'subjects'])
                </th>
                <th scope="col" wire:click="sortBy('current_photo')" style="cursor: pointer;">Photo
                    @include('partials._sort-icon',['field'=>'current_photo'])
                </th>
                <th scope="col" wire:click="sortBy('contact')" style="cursor: pointer;">Trs Contact
                    @include('partials._sort-icon',['field'=>'contact'])
                </th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
               @foreach ($teaching_staff_info as $i=>$teacher)
                <tr>
                    <td> {{$teaching_staff_info->firstItem() + $i}} </td>
                    <td class="text-wrap"> {{$teacher->name}} </td>
                    <td style="text-transform: capitalize"> {{$teacher->sex}} </td>
                    <td style="text-transform: capitalize"> {{$teacher->dob}} </td>
                    <td style="text-transform: capitalize"> {{$teacher->teachers_registration_number}} </td>
                    <td style="text-transform: capitalize">{{ get_classes(implode(',',unserialize($teacher->class_one)))}}</td>
                    <td style="text-transform: capitalize"> {{ get_subjects(implode(',',unserialize($teacher->subjects)))}} </td>
                    <td style="text-transform: capitalize"> <img src="{{ asset('storage/teachers_photos/'.$teacher->current_photo)}}" style="width:40px;height:40px;"> </td>
                    <td style="text-transform: capitalize"> {{$teacher->contact}} </td>
                    <td>
                        <button class="btn btn-sm btn-info">view more</button>
                        <button class="btn btn-sm btn-secondary">edit</button> 
                        <button class="btn btn-sm btn-danger">Delete</button> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       <div class="d-flex align-classs-center">
            <h5 class="card-title text-lowercase">Showing {{$teaching_staff_info->firstItem()}} to {{$teaching_staff_info->lastItem()}} out of {{$teaching_staff_info->total()}} items</h5>
            <div class="ms-auto">
            {{$teaching_staff_info->links()}}
            </div>
        </div>
    </div>
</div>
