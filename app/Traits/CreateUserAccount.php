<?php
namespace App\Traits;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait CreateUserAccount{
    /**
     * this function creates a user
     */
    public static function createAccount($contact,$user_category,$name,$email, $password, $current_photo){
        User::create(array(
            'name'                  => $name,
            'email'                 => $email,
            'contact'               => $contact,
            'password'              => Hash::make($password),
            'profile_photo_path'    => $current_photo,
            'user_category'         =>$user_category,
        )); 
    }
}