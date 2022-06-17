<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="d-flex align-classs-center">
        <div class="ms-auto">
        <a href="/academics/add-non-teaching-staff" class="btn btn-info  m-l-15 text-white mb-3"><i class="icon-plus"></i> Add Staff</a>
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
                <th scope="col" wire:click="sortBy('non_teaching_staff.id')" style="cursor: pointer;">#
                    @include('partials._sort-icon',['field'=>'non_teaching_staff.id'])
                </th>
                <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;">Name
                    @include('partials._sort-icon',['field'=>'name'])
                </th>
                <th scope="col" wire:click="sortBy('gender')" style="cursor: pointer;">Gender
                    @include('partials._sort-icon',['field'=>'gender'])
                </th>
                <th scope="col" wire:click="sortBy('date_of_birth')" style="cursor: pointer;">Date Of Birth
                    @include('partials._sort-icon',['field'=>'date_of_birth'])
                </th>
                <th scope="col" wire:click="sortBy('contact')" style="cursor: pointer;">Contact
                    @include('partials._sort-icon',['field'=>'contact'])
                </th>
                <th scope="col" wire:click="sortBy('committee')" style="cursor: pointer;">Committee
                    @include('partials._sort-icon',['field'=>'committee'])
                </th>
                <th scope="col" wire:click="sortBy('salary_amount')" style="cursor: pointer;">Salary
                    @include('partials._sort-icon',['field'=>'salary_amount'])
                </th>
                <th scope="col" wire:click="sortBy('current_photo')" style="cursor: pointer;">Photo
                    @include('partials._sort-icon',['field'=>'current_photo'])
                </th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
               @foreach ($non_teaching_staff_info as $i=>$staff)
                <tr>
                    <td> {{$non_teaching_staff_info->firstItem() + $i}} </td>
                    <td class="text-wrap"> {{$staff->name}} </td>
                    <td style="text-transform: capitalize"> {{$staff->gender}} </td>
                    <td style="text-transform: capitalize"> {{$staff->date_of_birth}} </td>
                    <td style="text-transform: capitalize"> {{$staff->contact}} </td>
                    <td style="text-transform: capitalize"> {{$staff->committee}} </td>
                    <td style="text-transform: capitalize"> {{$staff->salary_amount}} </td>
                    <td style="text-transform: capitalize"> <img src="{{ asset('storage/support_staff_photos/'.$staff->current_photo)}}" style="width:40px;height:40px;"> </td>
                    
                    <td>
                        <button class="btn btn-sm btn-info">view more</button>
                        <button class="btn btn-sm btn-secondary">edit</button> 
                        <button class="btn btn-sm btn-danger">Delete</button> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
          <div class="d-flex align-classs-center">
            <h5 class="card-title text-lowercase">Showing {{$non_teaching_staff_info->firstItem()}} to {{$non_teaching_staff_info->lastItem()}} out of {{$non_teaching_staff_info->total()}} items</h5>
            <div class="ms-auto">
            {{$non_teaching_staff_info->links()}}
            </div>
      </div>
</div>
