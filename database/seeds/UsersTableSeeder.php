<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Idris',
            'email' => 'idrisaadekunle@grandcereals.com',
            'password' => bcrypt('P@ssw0rd'),
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            ]);
    }
}
