<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class Loyal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loyals')->insert([
            'fname' => 'Vierry',
            'lname' => 'SHEMA',
            'gender' => 'Male',
            'idno' => '1234567890123456',
            'email' => 'vierry@shema.com',
            'date' => '2022-04-06',
            'phone' => '0786979551',
            'qualification' => 'A1',
            'status'=>1
        ]);

    }
}
