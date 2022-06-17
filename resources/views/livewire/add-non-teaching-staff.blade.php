<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @livewireStyles
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
                <div class="form-body">
                    @if(session()->has('success'))
                    <div class="card-header bg-success">
                        <h4 class="mb-0 text-white">{{session('success')}}</h4>
                </div>
                    @endif
                <div class="card">
                <form wire:submit.prevent="saveNonTeachingStaff">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight:bold;">Add Non Teaching Information</h4>
                    </div>
                    <hr>
                        <div class="card-body">
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Name <span style="color:red">*</span></label>
                                        <input type="text" id="StudentName" wire:model="name" class="form-control" placeholder="">
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth <span style="color:red">*</span></label>
                                        <input type="date" id="DOB" wire:model="date_of_birth" class="form-control form-control-danger" placeholder="">
                                        @error('date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Gender <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="gender">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                        @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                                <div class="row">
                                  <div class="col-md-4">
                                        <div class="form-group">
                                                <label class="form-label">Category <span style="color:red">*</span></label>
                                                <select class="form-control form-select" wire:model="user_category">
                                                @foreach($users_category as $cat)
                                                <option value="{{$cat->id}}">{{$cat->category}}</option>
                                                @endforeach
                                                </select>
                                                @error('user_category') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">District <span style="color:red">*</span></label>
                                            <select class="form-control form-select" wire:model="district_id">
                                            @foreach($get_all_districts as $district)
                                            <option value="{{$district->id}}">{{$district->district}}</option>
                                            @endforeach
                                            </select>
                                            @error('district_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"> 
                                            <label class="form-label">Contact</label>
                                            <input type="text" class="form-control" maxlenght="10" placeholder="0707070707"  wire:model="contact">
                                            @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                  <!--/span-->
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">County <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="county">
                                        @error('county') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Village <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="village">
                                        @error('village') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">NIN Number </label>
                                        <input type="text" class="form-control" wire:model="nin_number">
                                        @error('nin_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Qualification (Optional) </label>
                                        <input type="text" class="form-control" wire:model="qualification">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Committee (Optional)</label>
                                        <select class="form-control form-select" wire:model="committee">
                                        <option value="SMC">School Management Committee</option>
                                        <option value="PTA">Parents Teachrs Association</option>
                                        <option value="BOG">Board of Governors</option>
                                        </select>
                                        @error('committee') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Salary </label>
                                        <input type="text" class="form-control" wire:model="salary_amount">
                                        @error('salary_amount') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Current Photo</label>
                                        <input type="file" class="form-control" wire:model="current_photo">
                                        @error('current_photo') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Email <span style="color:red">*</span></label>
                                        <input type="email" class="form-control" wire:model="email" >
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Password <span style="color:red">*</span> </label>
                                        <input type="password" class="form-control" wire:model="password">
                                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password <span style="color:red">*</span></label>
                                        <input type="password" wire:model="confirm_password" id="StaffConfirmPassword" class="form-control">
                                         @error('confirm_password') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="form-actions">
                                <div class="card-body text-center">
                                    <button class="btn btn-success text-white"> <i class="ti-save"></i> Save</button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Row -->
    @livewireScripts
</div>
