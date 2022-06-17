<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $guarded = ['id'];

    
    //Tis function searches by any of this fields
    public function scopeSearch($query, $val){
        return $query
        ->where('name','like','%'.$val.'%') 
        ->Orwhere('date_of_birth','like','%'.$val.'%')
        ->Orwhere('gender','like','%'.$val.'%')
        ->Orwhere('primary_classes.class','like','%'.$val.'%');
    }
}
