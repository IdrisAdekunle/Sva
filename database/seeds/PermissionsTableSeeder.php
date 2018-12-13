<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(array(
                  array('name'=>'Change Staff Shift','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Schedule Department Shift','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Create Dates','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Create Staff','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Reset Password','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'View Logs','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Create Shift','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Create User','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Create Department','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Edit Staff','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Edit Shift','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Edit User','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Edit Department','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Delete Staff','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Delete User','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Delete Shift','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Delete Department','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'View Staff','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'View Department','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'View All Users','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'View All Shift','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'View All Staff','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),
                  array('name'=>'Administer roles & permissions','guard_name'=>'web','created_at' => carbon::now(), 'updated_at' => carbon::now()),


        ));
    }
}
