<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifts')->insert(array(
            array('name'=>'MORNING SHIFT','created_at' => carbon::now(), 'updated_at' => carbon::now()),
            array('name'=>'AFTERNOON SHIFT','created_at' => carbon::now(), 'updated_at' => carbon::now()),
            array('name'=>'NIGHT SHIFT','created_at' => carbon::now(), 'updated_at' => carbon::now()),

        ));
    }
}
