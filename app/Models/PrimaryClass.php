<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryClass extends Model
{
    use HasFactory;
    protected $fillable =['class','level_id'];


    public function scopeSearch($query, $val){
        return $query
        ->where('primary_classes.class','like','%'.$val.'%')
        ->Orwhere('levels.level','like','%'.$val.'%');
    }
}
