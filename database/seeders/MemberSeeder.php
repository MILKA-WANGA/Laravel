<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//import Database
use Illuminate\Support\Facades\DB;
//import string
use Illuminate\Support\Str;



class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('members')->insert([
            'name'=>Str::random(10),
            'idNumber'=>Str::random(10),
             'role'=>Str::ramdom(10),
             'dateOfBirth'=>Str::random(10)
        ]);
    }
}
