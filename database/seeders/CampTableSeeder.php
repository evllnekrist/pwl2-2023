<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title'         => 'Gila Belajar',
                'slug'          => 'gila-belajar',
                'price'         => 200,
                'created_at'    => date('Y-m-d H:i:s',time()),
                'updated_at'    => date('Y-m-d H:i:s',time()),
            ],
            [
                'title'         => 'Baru Mulai',
                'slug'          => 'baru-mulai',
                'price'         => 140,
                'created_at'    => date('Y-m-d H:i:s',time()),
                'updated_at'    => date('Y-m-d H:i:s',time()),
            ]
        ];

        // // 1st method: // insert one by one through looping
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }


        // // 2nd method: // insert row/bulk
        Camp::insert($camps);

    }
}
