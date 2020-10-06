<?php

use Illuminate\Database\Seeder;

class PenceramahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //rekod 1
        DB::table('penceramahs')->insert(
            [
                'nama'=>'Khirulnizam Abd Rahman',
                'bidang'=>'Pegaturcaraan',
                'bio'=>'Lorem ipsum....',
                'noic'=>'770101-01-7777',
                'tarikhlahir'=>'1977-01-01'
            ]
        );
        //rekod 2
        DB::table('penceramahs')->insert(
            [
                'nama'=>'Tarmizi Sanusi',
                'bidang'=>'Server Ops',
                'bio'=>'Lorem ipsum...',
                'noic'=>'900909-02-1233',
                'tarikhlahir'=>'1999-09-09'
            ]
        );
        //rekod 3
        DB::table('penceramahs')->insert(
            [
                'nama'=>'Hafiz Tabrani',
                'bidang'=>'Keselamatan Rangkaian',
                'bio'=>'Lorem ipsum...',
                'noic'=>'900909-02-1233',
                'tarikhlahir'=>'1999-09-09'
            ]
        );
    }
}
