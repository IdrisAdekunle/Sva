<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Backend Developer',
            'guard_name' => 'web',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),

        ]);
    }
}
