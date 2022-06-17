<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TeachingStaff;
use App\Traits\CreateUserAccount;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads; 
use App\Models\PrimaryClass;
use App\Models\District;
use App\Models\Subject;
use Session;


class AddTeachingStaff extends Component
{
    use SaveToFolder,WithFileUploads,CreateUserAccount;
    
        public $name;
        public $dob;
        public $sex;
        public $class_one;
        public $class_two;
        public $subject_two;
        public $teachers_district_id;
        public $teachers_county;
        public $teachers_village;
        public $teachers_registration_number;
        public $teachers_nin;
        public $institution;
        public $year_of_qualification;
        public $award;
        public $award_grading;
        public $other_qualifications;
        public $user_category;
        public $contact;
        public $teachers_marital_status;
        public $teachers_religion;
        public $current_photo;
        public $email;
        public $password;
        public $confirm_password;
        public $employment_status;
        public $salary;
        public $subjects;

         //validating the requests
     protected $rules = [
        'name'                            => 'required',
        'dob'                             => 'required',
        'sex'                             => 'required',
        'teachers_district_id'            => 'required',
        'teachers_county'                 => 'required',
        'teachers_village'                => 'required',
        'teachers_registration_number'    => 'required|unique:teaching_staff',
        'teachers_nin'                    => 'required|unique:teaching_staff',
        'institution'                     => 'required',
        'year_of_qualification'           => 'required',
        'award'                           => 'required',
        'award_grading'                   => 'required',
        'other_qualifications'            => '',
        'user_category'                   => 'required',
        'contact'                         => 'required|unique:teaching_staff|unique:users',
        'teachers_marital_status'         => 'required',
        'teachers_religion'               => 'required',
        'current_photo'                   => 'required|max:1024',
        'email'                           => 'required|unique:users',
        'password'                        => 'required',
        'confirm_password'                => 'required|same:password',  
        'class_one'                       => 'required',
        'class_two'                       => 'required',
        'subject_two'                     => 'required',
        'employment_status'               =>'required',
        'salary'                          =>'required',
        'subjects'                        =>'required',
    ];
    public function render()
    {
        $get_all_districts =$this->getDistricts();
         $get_all_classes =$this->getClasses();
         $get_all_subject =$this->getSubjects();
        return view('livewire.add-teaching-staff',compact('get_all_classes','get_all_districts','get_all_subject'));
    }
    /**
     * save the student information
     */
    public function saveTeachersInfo(){
        $this->validate();
        //$this->createAccount($this->contact, $this->name, $this->email,$this->password,$this->user_category, 'teachers_photos/'.$this->current_photo);
        TeachingStaff::create(array(
            'name'                         => $this->name,
            'dob'                           => $this->dob,
            'sex'                           => $this->sex,
            'class_one'                     => serialize([$this->class_one, $this->class_two]),
            'subjects'                      => serialize([$this->subjects, $this->subject_two]),
            'current_photo'                => $this->saveItemToFolder('teachers_photos',$this->current_photo),
            'teachers_district_id'          => $this->teachers_district_id,
            'teachers_county'               => $this->teachers_county,
            'teachers_village'              => $this->teachers_village,
            'teachers_registration_number'  => $this->teachers_registration_number,
            'teachers_nin'                  => $this->teachers_nin,
            'institution'                   => $this->institution,
            'year_of_qualification'         =>$this->year_of_qualification,
            'award'                         =>$this->award,
            'award_grading'                 =>$this->award_grading,
            'other_qualifications'          =>$this->other_qualifications,
            'user_category'                 =>$this->user_category,
            'contact'                       =>$this->contact,
            'teachers_marital_status'       =>$this->teachers_marital_status,
            'teachers_religion'             =>$this->teachers_religion,
            'created_by'                    => auth()->user()->id,
            'email'                         => $this->email,
            'password'                      => $this->password,
            'salary'                        =>$this->salary,
            'employment_status'             =>$this->employment_status,
        ));
        Session::flash('success', 'New Student Created Successfully');
        //return redirect()->back();
        
    }
    /**
     * This function gets classes
     */
    private function getClasses(){
        return PrimaryClass::get();
    }
     /**
     * This function gets districts
     */
    private function getDistricts(){
        return District::get();
    }
      /**
     * This function gets subjects
     */
    private function getSubjects(){
        return Subject::get();
    }

}
