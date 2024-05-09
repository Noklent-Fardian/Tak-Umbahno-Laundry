<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call([
        //     UserSeeder::class,
        // ]);

        DB::table('users')->insert([
            'name' => 'Noklent Fardian',
            'email' => 'admin@gmail.com',  
            'no_hp' => '087866301810',
            'role' => 'Pegawai',
            'password' => bcrypt('admin123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Berliana',
            'email' => 'pembeli@gmail.com',
            'no_hp' => '087866301811',
            'role' => 'Pembeli',
            'password' => bcrypt('pembeli123'),
        ]);
        DB ::table('jenis_members')->insert([
            'nama_jenisMember' => 'Reguler',
        ]);
        DB ::table('jenis_members')->insert([
            'nama_jenisMember' => 'Premium',
        ]);
        DB ::table('jenis_members')->insert([
            'nama_jenisMember' => 'VIP',
        ]);

    }
}
