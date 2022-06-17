<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    use HasFactory;
    protected $fillable=['category'];

    public function scopeSearch($query, $val){
        return $query
        ->where('category','like','%'.$val.'%');
    }
}
