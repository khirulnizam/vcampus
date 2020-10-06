<?php

use Illuminate\Database\Seeder;

class LatihansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //rekod 1
        DB::table('latihans')->insert(
            [
                'namalatihan'=>'Laravel Basics 101',
                'kod'=>'L01',
                'deskripsi'=>'Lorem ipsum...',
                'idpenceramah'=>'1'
            ]
        );
        //rekod 2
        DB::table('latihans')->insert(
            [
                'namalatihan'=>'Ionic Baics 101',
                'kod'=>'I01',
                'deskripsi'=>'Lorem ipsum...',
                'idpenceramah'=>'1'
            ]
        );
        //rekod 3
        DB::table('latihans')->insert(
            [
                'namalatihan'=>'Laravel Advanced',
                'kod'=>'L02',
                'deskripsi'=>'Lorem ipsum...',
                'idpenceramah'=>'2'
            ]
        );
        //rekod 4
        DB::table('latihans')->insert(
            [
                'namalatihan'=>'Flutter Multiplatform',
                'kod'=>'F01',
                'deskripsi'=>'Lorem ipsum...',
                'idpenceramah'=>'1'
            ]
        );
        //rekod 5
        DB::table('latihans')->insert(
            [
                'namalatihan'=>'Laravel Deployment',
                'kod'=>'L03',
                'deskripsi'=>'Lorem ipsum...',
                'idpenceramah'=>'2'
            ]
        );
    }
}
