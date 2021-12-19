<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Budi',
            'nisn' => 101,
            'tanggal_lahir' => '2000-10-22'
        ]);

        DB::table('siswa')->insert([
            'nama' => 'Joko',
            'nisn' => 102,
            'tanggal_lahir' => '2001-08-15'
        ]);
    }
}
