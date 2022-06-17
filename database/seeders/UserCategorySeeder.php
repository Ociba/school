<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserCategory;

class UserCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Student','Classroom Teacher','Deputy Headteacher','Headteacher','Director','Head of Department',
                      'Chairman','Vice Chairman','Secretary','Accountant','Nurse','Cleaner','Cook','Driver','Member'
    ];
            for($i=0; $i < count($categories); $i++){
            $category = new UserCategory();
            if(UserCategory::where("id",$i)->exists()){
            $category->id = $i+1;
            }
            else{
            $category->id = $i;
            } 
            $category->category=$categories[$i];
            $category->save();

            }
    }
}
