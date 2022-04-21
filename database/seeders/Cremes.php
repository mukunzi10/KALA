<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Cremes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cremes')->insert([
            'cre_id' => 1,
            'title' => 'Ikibazo cyo gutana n`umugore twashajanye',
            'description' => 'Narifite umugore twabyaranye abana babiri gusa nyuma y`imyaka itatu twisanze mumakibirane biba ngombwa ko dutana ubu turri mumaza',
            'cit_id'=>1,
            'id'=>1,
            'file'=>'1'
            ]);
    }
}
