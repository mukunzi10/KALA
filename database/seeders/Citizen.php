<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class Citizen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::insert("INSERT INTO `citizens` ( `fname`, `lname`, `gender`, `phone`, `province`, `district`, `sector`) VALUES ( 'Vierry', 'SHEMA', 'Male', '0786979551', 'Northern', 'Musanzi', 'Muhonza') ");

    }
}
