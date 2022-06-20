<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\PrimaryResult;
use App\Models\Students;
use App\Models\Subject;
use App\Models\PrimaryClass;
use Session;

class AddPrimaryResults extends ModalComponent
{
    public $subject_id;
    public $class_id;
    public $student_id;
    public $created_by;
    public $mark;
    /**
     * This function validates primary results
     */
    protected $rule=[
        'subject_id'  =>'required',
        'class_id'    =>'required',
        'student_id'  =>'required',
        'mark'        =>'required',
    ];

    public function render()
    {
        $get_subject =$this->getSubjects();
        $get_class =$this->getClasses();
        return view('livewire.add-primary-results',compact('get_subject','get_class'));
    }

    public function mount($class_id,$subject_id,$student_id){
        $this->fill([
           'class_id'   => PrimaryClass::where('id',$class_id)->value('id'),
           'subject_id' => Subject::where('id',$subject_id)->value('id'),
           'student_id' => Student::where('id',$student_id)->value('id'),
           'mark'       =>$this->mark,
       ]);
   }


    public function createPrimaryResults(){
        $this->validate();
        $this->emit('AddPrimaryResults','refreshComponent');
        
        PrimaryResult::create(array(
        'subject_id'     =>$this->subject_id,
        'class_id'       =>$this->class_id,
        'student_id'     =>$this->student_id,
        'mark'           =>$this->mark,
        'created_by'     =>auth()->user()->id,
        ));
        Session::flash('success','Marks Added successfully');
    }
    /**
     * This function gets the subjects
     */
    private function getSubjects(){
        return Subject::get();
    }
     /**
     * This function gets the classes
     */
    private function getClasses(){
        return PrimaryClass::get();
    }
}
