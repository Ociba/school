<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachingStaff extends Model
{
    use HasFactory;
    protected $table ='teaching_staff';
    protected $guarded =['id'];

    public function scopeSearch($query, $val){
        return $query
        ->where('teaching_staff.name','like','%'.$val.'%') 
        ->Orwhere('dob','like','%'.$val.'%')
        ->Orwhere('teachers_registration_number','like','%'.$val.'%')
        ->Orwhere('teaching_staff.contact','like','%'.$val.'%');
    }
}
