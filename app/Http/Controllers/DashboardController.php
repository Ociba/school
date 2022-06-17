<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected function getDashboard(){
        if(auth()->user()->user_category == 4){
            return view('adminstration::index');
        }elseif(auth()->user()->user_category == 3){
            return redirect("/dashboard");
        }else{
            return redirect('/teachingstaff/dashboard');
        }
    }
    protected function getAcademicDashboard(){
        return view('dashboard');
    }
}
