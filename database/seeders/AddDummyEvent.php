<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
         ['title'=>'Master class', 'start_date'=>'2022-09-12', 'end_date'=>'2022-09-12', 'description'=>'m. Kyiv, SPARTAK'],
         ['title'=>'Camp', 'start_date'=>'2022-09-20', 'end_date'=>'2022-09-27', 'description'=>'m. Dnipro, Ley st, 10'],
        ];
        \DB::table('events')->insert($data);
    }
}
