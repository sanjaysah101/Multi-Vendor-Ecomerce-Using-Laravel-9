<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert([
            // 'id'=>1,
            'name'=>'Super Admin',
            'type'=>'superadmin',
            'vendor_id'=>0,
            'mobile'=>'9800000000',
            'email'=>'superadmin@admin.com',
            'password'=>'12345',
            'password'=>Hash::make('12345'),
            'image'=>'',
            'status'=>1
        ]);
      
    }
}
