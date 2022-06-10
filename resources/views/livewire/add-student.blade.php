<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @livewireStyles
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @if(session()->has('success'))
                <div class="card-header bg-success">
                    <h4 class="mb-0 text-white">{{session('success')}}</h4>
                </div>
                @endif
                <form wire:submit.prevent="saveStudentInfo">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight:bold;">Student Information</h4>
                    </div>
                    <hr>
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name <span style="color:red">*</span></label>
                                        <input type="text" id="StudentName" wire:model="student_name" class="form-control" placeholder="John Odongo">
                                        @error('student_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth <span style="color:red">*</span></label>
                                        <input type="date" id="DOB" wire:model="date_of_birth" class="form-control form-control-danger" placeholder="">
                                        @error('date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label class="form-label">Class <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="student_level">
                                        @foreach($get_all_classes as $clas)
                                        <option value="{{$clas->id}}">{{$clas->class}}</option>
                                        @endforeach
                                        </select>
                                        @error('student_level') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Passport Photo  <span style="color:red">*</span></label>
                                        <input type="file" id="PassportPhoto" wire:model="passport_photo" accept="image/*" class="form-control form-control-danger" placeholder="">
                                        @error('passport_photo') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">District <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="district_id">
                                        @foreach($get_all_districts as $district)
                                        <option value="{{$district->id}}">{{$district->district}}</option>
                                        @endforeach
                                        </select>
                                        @error('district_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">County <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="county">
                                        @error('county') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Village <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="village">
                                        @error('village') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Registration Code <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="registration_number">
                                        @error('registration_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Student NIN (Optional)</label>
                                        <input type="text" class="form-control" wire:model="nin">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Any Disease Or Disabilty <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="disease">
                                        @error('disease') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Co Curricular <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="cocurricular">
                                            <option value="games">Games And Sports</option>
                                            <option value="music">Music</option>
                                        </select>
                                        @error('cocurricular') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="card-body">
                                <h4 class="card-title" style="font-weight:bold;">Parents Information</h4>
                            </div>
                            <hr class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mothers Name (Optional)</label>
                                        <input type="text" class="form-control" wire:model="mothers_name">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mothers Contact (Optional)</label>
                                        <input type="text" class="form-control" wire:model="mothers_contact">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mothers NIN (Optional)</label>
                                        <input type="text" class="form-control" wire:model="mothers_nin">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Fathers Name (Optional)</label>
                                        <input type="text" class="form-control"  wire:model="fathers_name">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Fathers Contact (Optional)</label>
                                        <input type="text" class="form-control" wire:model="fathers_contact">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Fathers NIN (Optional)</label>
                                        <input type="text" class="form-control" wire:model="fathers_nin">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Emergency Person Name <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="emergency_name">
                                        @error('emergency_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Emergency Person NIN <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="emergency_nin">
                                        @error('emergency_nin') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Emergency Person Contact <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="emergency_contact">
                                        @error('emergency_contact') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email <span style="color:red">*</span></label>
                                        <input type="email" class="form-control" wire:model="email" >
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Password <span style="color:red">*</span> </label>
                                        <input type="password" class="form-control" wire:model="password">
                                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
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
                                    <button class="btn btn-success text-white"> <i class="fa fa-check"></i> Save</button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Row -->
    @livewireScripts
</div>
