<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryClass extends Model
{
    use HasFactory;
    protected $fillable =['class','category'];
}
