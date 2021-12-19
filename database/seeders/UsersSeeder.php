<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pak Guru',
            'role' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('tes123')
        ]);
        DB::table('users')->insert([
            'name' => 'Muklas Nur Ardiansyah',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'muklas@gmail.com',
            'password' => bcrypt('tes123')
        ]);
        DB::table('users')->insert([
            'name' => 'Ardiansyah',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'ardians@gmail.com',
            'password' => bcrypt('tes123')
        ]);
    }
}
