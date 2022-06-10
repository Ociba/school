<?php
namespace App\Traits;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait CreateUserAccount{
    /**
     * this function creates a user
     */
    public static function createAccount($student_level,$student_name,$email, $password, $passport_photo){
        User::create(array(
            'name'                  => $student_name,
            'email'                 => $email,
            'student_level'         => $student_level,
            'password'              => Hash::make($password),
            'profile_photo_path'    => $passport_photo
        )); 
    }
}