<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonTeachingStaff extends Model
{
    use HasFactory;
    protected $table ='non_teaching_staff';
    protected $guarded =['id'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val){
        return $query
        ->where('name','like','%'.$val.'%') 
        ->Orwhere('date_of_birth','like','%'.$val.'%')
        ->Orwhere('gender','like','%'.$val.'%') 
        ->Orwhere('contact','like','%'.$val.'%')
        ->Orwhere('committee','like','%'.$val.'%')
        ->Orwhere('salary_amount','like','%'.$val.'%');
    }
}
