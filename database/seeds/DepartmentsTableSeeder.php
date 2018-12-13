<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(array(
            array('name'=>'OIL MILL','created_at' => carbon::now(), 'updated_at' => carbon::now()),
            array('name'=>'FISH FEED','created_at' => carbon::now(), 'updated_at' => carbon::now()),
            array('name'=>'CEREAL MILL','created_at' => carbon::now(), 'updated_at' => carbon::now()),
            array('name'=>'FEED MILL 1','created_at' => carbon::now(), 'updated_at' => carbon::now()),
            array('name'=>'FEED MILL 2','created_at' => carbon::now(), 'updated_at' => carbon::now()),

        ));
    }
}
