<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\NonTeachingStaff;
use App\Traits\CreateUserAccount;
use App\Traits\SaveToFolder;
use Livewire\WithFileUploads; 
use App\Models\UserCategory;
use App\Models\District;
use Session;

class AddNonTeachingStaff extends ModalComponent
{
  
    use SaveToFolder,WithFileUploads,CreateUserAccount;

    public $name;
    public $date_of_birth;
    public $gender;
    public $user_category;
    public $contact;
    public $district_id;
    public $county;
    public $village;
    public $qualification;
    public $committee;
    public $current_photo;
    public $nin_number;
    public $salary_amount;
    public $email;
    public $password;
    public $confirm_password;
    //validate non teaching staff info
    protected $rules =[
        'name'             =>'required',
        'date_of_birth'    =>'required',
        'gender'           =>'required',
        'user_category'    =>'required',
        'contact'          =>'required |unique:non_teaching_staff|unique:users',
        'district_id'      =>'required',
        'county'           =>'required',
        'village'          =>'required',
        'qualification'    =>'',
        'committee'        =>'',
        'current_photo'    =>'required:max:1024',
        'nin_number'       =>'required|unique:non_teaching_staff',
        'salary_amount'    =>'numeric|digits_between:2,15',
        'email'            =>'required:unique:users',
        'password'         =>'required',
        'confirm_password' =>'required|same:password',
    ];
    public function render()
    {
        $get_all_districts =$this->getDistricts();
        $users_category =$this->getUserCategories();
        return view('livewire.add-non-teaching-staff',compact('get_all_districts','users_category'));
    }
    /**
     * save the student information
     */
    public function saveNonTeachingStaff(){
        $this->validate();
        $this->createAccount($this->contact,$this->user_category, $this->name, $this->email,$this->password, 'support_staff_photos/'.$this->current_photo);
        NonTeachingStaff::create(array(
            'name'                         => $this->name,
            'date_of_birth'                => $this->date_of_birth,
            'gender'                       => $this->gender,
            'user_category'                => $this->user_category,
            'current_photo'                => $this->saveItemToFolder('support_staff_photos',$this->current_photo),
            'district_id'                  => $this->district_id,
            'county'                       => $this->county,
            'village'                      => $this->village,
            'nin_number'                   => $this->nin_number,
            'qualification'                => $this->qualification,
            'committee'                    =>$this->committee,
            'salary_amount'                =>$this->salary_amount,
            'created_by'                   => auth()->user()->id,
            'email'                        => $this->email,
            'password'                     => $this->password,
            'contact'                      =>$this->contact,
        ));
        Session::flash('msg', 'New Support Staff Added Successfully');
        return redirect()->to('/academics/non-teaching-staffs');
        
    }
     /**
     * This function gets districts
     */
    private function getDistricts(){
        return District::get();
    }
      /**
     * This function gets user categories
     */
    private function getUserCategories(){
        return UserCategory::get();
    }
}
