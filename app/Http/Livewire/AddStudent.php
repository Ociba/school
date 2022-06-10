<?php

namespace App\Http\Livewire;
use LivewireUI\Modal\ModalComponent;
use Session;
use Livewire\Component;
use App\Traits\CreateUserAccount;
use App\Models\Student;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads; 
use App\Models\PrimaryClass;
use App\Models\District;

class AddStudent extends ModalComponent
{
    use SaveToFolder,WithFileUploads,CreateUserAccount;

    public $student_name;
    public $date_of_birth;
    public $gender;
    public $student_level;
    public $district_id;
    public $county;
    public $village;
    public $registration_number;
    public $nin;
    public $disease;
    public $cocurricular;
    public $mothers_name;
    public $mothers_contact;
    public $mothers_nin;
    public $fathers_name;
    public $fathers_contact;
    public $fathers_nin;
    public $emergency_name;
    public $emergency_contact;
    public $emergency_nin;
    public $email;
    public $password;
    public $confirm_password;
    public $current_photo;
    public $passport_photo;

     //validating the requests
     protected $rules = [
        'student_name'           => 'required',
        'date_of_birth'          => 'required',
        'gender'                 => 'required',
        'district_id'            => 'required',
        'county'                 => 'required',
        'village'                => 'required',
        'registration_number'    => 'required',
        'nin'                    => '',
        'disease'                => 'required|max:1024',
        'cocurricular'           => 'required',
        'mothers_name'           => '',
        'mothers_contact'        => '',
        'mothers_nin'            => '',
        'fathers_name'           => '',
        'fathers_contact'        => '',
        'fathers_nin'            => '',
        'emergency_name'         => 'required',
        'emergency_contact'      => 'required',
        'emergency_nin'          => 'required',
        'email'                  => 'required|unique:users',
        'password'               => 'required',
        'confirm_password'       => 'required|same:password',
        'student_level'          => 'required',
        'passport_photo'          => 'required|max:1024',
    ];

    public function render()
    {
        $get_all_districts =$this->getDistricts();
         $get_all_classes =$this->getClasses();
        return view('livewire.add-student',compact('get_all_classes','get_all_districts'));
    }
    /**
     * save the student information
     */
    public function saveStudentInfo(){
        $this->validate();
        $this->createAccount($this->student_level, $this->student_name, $this->email,$this->password, 'student_photos/'.$this->passport_photo);
        Student::create(array(
            'student_name'              => $this->student_name,
            'date_of_birth'             => $this->date_of_birth,
            'gender'                    => $this->gender,
            'student_level'             => $this->student_level,
            'passport_photo'            => $this->saveItemToFolder('student_photos',$this->passport_photo),
            'district_id'               => $this->district_id,
            'county'                    => $this->county,
            'village'                   => $this->village,
            'registration_number'       => $this->registration_number,
            'nin'                       => $this->nin,
            'disease'                   => $this->disease,
            'cocurricular'              =>$this->cocurricular,
            'mothers_name'              =>$this->mothers_name,
            'mothers_contact'           =>$this->mothers_contact,
            'mothers_nin'               =>$this->mothers_nin,
            'fathers_name'              =>$this->fathers_name,
            'fathers_contact'           =>$this->fathers_contact,
            'fathers_nin'               =>$this->fathers_nin,
            'emergency_name'            =>$this->emergency_name,
            'emergency_contact'         =>$this->emergency_contact,
            'emergency_nin'             =>$this->emergency_nin,
            'created_by'                => auth()->user()->id,
            'email'                     => $this->email,
            'password'                  => $this->password,
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
}
