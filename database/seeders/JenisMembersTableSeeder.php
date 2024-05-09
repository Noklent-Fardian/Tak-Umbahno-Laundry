<?php

namespace Database\Seeders;

use App\Models\JenisMember;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisMember::create([
            'nama_jenisMember' => 'Member Biasa',
        ]);

        JenisMember::create([
            'nama_jenisMember' => 'Member Premium',
        ]);
    }
}
