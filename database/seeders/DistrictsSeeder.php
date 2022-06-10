<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = ['Buikwe','Bukomansimbi','Butambala','Buvuma','Gomba','Kalangala','Kalungu','Kampala',
        'Kayunga','Kiboga','Kyankwanzi','Luweero','Lwengo','Lyantonde','Masaka','Mityana',
        'Mpigi','Mubende','Mukono','Nakaseke','Nakasongola','Rakai','Sembabule','Wakiso',
        'Amuria','Budaka','Bududa','Bugiri','Bukedea','Bukwa','Bulambuli','Busia','Butaleja',
        'Buyende','Iganga','Jinja','Kaberamaido','Kaliro','Kamuli','Kapchorwa','Katakwi',
        'Kibuku','Kumi','Kween','Luuka','Manafwa','Mayuge','Mbale','Namayingo','Namutumba',
        'Ngora','Pallisa','Serere','Sironko','Soroti','Tororo','Abim','Adjumani','Agago',
        'Alebtong','Amolatar','Amudat','Amuru','Apac','Arua','Dokolo','Gulu','Kaabong',
        'Kitgum','Koboko','Kole','Kotido','Lamwo','Lira','Maracha','Moroto','Moyo',
        'Nakapiripirit','Napak','Nebbi','Nwoya','Otuke','Oyam','Pader','Yumbe','Zombo',
        'Buhweju','Buliisa','Bundibugyo','Bushenyi','Hoima','Ibanda','Isingiro','Kabale',
        'Kabarole','Kamwenge','Kanungu','Kasese','Kibaale','Kiruhura','Kiryandongo',
        'Kisoro','Kyegegwa','Kyenjojo','Masindi','Mbarara','Mitooma','Ntoroko','Ntungamo',
        'Rubirizi','Rukungiri','Sheema'
    ];
            for($i=0; $i < count($districts); $i++){
            $district = new District();
            if(District::where("id",$i)->exists()){
            $district->id = $i+1;
            }
            else{
            $district->id = $i;
            } 
            $district->district=$districts[$i];
            $district->save();

            }
    }
}
