<div>
    {{-- Success is as dangerous as failure. --}}
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
                <form wire:submit.prevent="saveTeachersInfo">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight:bold;">Teachers Information</h4>
                    </div>
                    <hr>
                    <div class="form-body">
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
                                        <input type="date" id="DOB" wire:model="dob" class="form-control form-control-danger" placeholder="">
                                        @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Gender <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="sex">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                        @error('sex') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                                <div class="row">
                                  <div class="col-md-4">
                                        <div class="form-group">
                                                <label class="form-label">Class 1 <span style="color:red">*</span></label>
                                                <select class="form-control form-select" wire:model="class_one">
                                                @foreach($get_all_classes as $clas)
                                                <option value="{{$clas->id}}">{{$clas->class}}</option>
                                                @endforeach
                                                </select>
                                                @error('class_one') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <label class="form-label">Class 2<span style="color:red">*</span></label>
                                                <select class="form-control form-select" wire:model="class_two">
                                                <option value="N\A">Not Applicable</option>
                                                @foreach($get_all_classes as $clas)
                                                <option value="{{$clas->id}}">{{$clas->class}}</option>
                                                @endforeach
                                                </select>
                                                @error('class_two') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <label class="form-label">Subject 1 <span style="color:red">*</span></label>
                                                <select class="form-control form-select" wire:model="subjects">
                                                @foreach($get_all_subject as $subject)
                                                <option value="{{$subject->id}}">{{$subject->subject}}</option>
                                                @endforeach
                                                </select>
                                                @error('subjects') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                  <!--/span-->
                                </div>
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <label class="form-label">Subject 2 <span style="color:red">*</span></label>
                                                <select class="form-control form-select" wire:model="subject_two">
                                                <option value="N\A">Not Applicable</option>
                                                @foreach($get_all_subject as $subbject)
                                                <option value="{{$subbject->id}}">{{$subbject->subject}}</option>
                                                @endforeach
                                                </select>
                                                @error('class_two') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                     <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">District <span style="color:red">*</span></label>
                                                <select class="form-control form-select" wire:model="teachers_district_id">
                                                @foreach($get_all_districts as $district)
                                                <option value="{{$district->id}}">{{$district->district}}</option>
                                                @endforeach
                                                </select>
                                                @error('teachers_district_id') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">County <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" wire:model="teachers_county">
                                            @error('teachers_county') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Village <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="teachers_village">
                                        @error('teachers_village') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Registration Nmber <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" wire:model="teachers_registration_number">
                                        @error('teachers_registration_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Teachers NIN </label>
                                        <input type="text" class="form-control" wire:model="teachers_nin">
                                        @error('teachers_nin') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Institution </label>
                                        <input type="text" class="form-control" wire:model="institution">
                                        @error('institution') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Year of Qualification </label>
                                        <input type="text" class="form-control" wire:model="year_of_qualification">
                                        @error('year_of_qualification') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Award <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="award">
                                        <option value="phd">Phd</option>
                                        <option value="masters">Master</option>
                                        <option value="Degree">Degree</option>
                                        <option value="post diploma">Post Diploma</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Certificate">Certificate</option>
                                        <option value="Result Slip">Result Slip</option>
                                        </select>
                                        @error('award') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Award Grading <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="award_grading">
                                            <option value="First class">First Class</option>
                                            <option value="second Class-upper">Second Class Upper</option>
                                            <option value="second Class-Lower">Second Class Lower</option>
                                            <option value="pass">Pass</option>
                                            <option value="Division One">Division One</option>
                                            <option value="Division Two">Division Two</option>
                                            <option value="Division Three">Division Three<  /option>
                                            <option value="Division Four">Division Four</option>
                                            <option value="failed">Failed</option>
                                        </select>
                                        @error('award_grading') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Other Qualification </label>
                                        <input type="text" class="form-control" wire:model="other_qualifications">
                                        @error('other_qualifications') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Teachers Responsibility <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="user_category">
                                        @foreach($get_user_category as $category)
                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                        </select>
                                        @error('user_category') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group"> 
                                        <label class="form-label">Teachers Contact</label>
                                        <input type="text" class="form-control" wire:model="contact">
                                        @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Marital Status <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="teachers_marital_status">
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="Others">Others</option>
                                        <option value="director">Director</option>
                                        </select>
                                        @error('teachers_marital_status') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Religion <span style="color:red">*</span></label>
                                        <select class="form-control form-select" wire:model="teachers_religion">
                                        <option value="protestant">Protestant</option>
                                        <option value="Catholic">Catholic</option>
                                        <option value="Seven Days Adventist">SDA</option>
                                        <option value="Moslem">Moslem</option>
                                        <option value="Pentecostal">Pentecostal</option>
                                        </select>
                                        @error('teachers_religion') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Salary Scale</label>
                                        <input type="text" class="form-control"  wire:model="salary">
                                        @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Employment Status</label>
                                        <select class="form-control form-select" wire:model="employment_status">
                                        <option value="Government">Government</option>
                                        <option value="Private">Private</option>
                                        </select>
                                        @error('employment_status') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Current Photo</label>
                                        <input type="file" class="form-control" wire:model="current_photo">
                                        @error('current_photo') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
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
