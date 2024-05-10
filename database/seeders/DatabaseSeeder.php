<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
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
        DB::table('users')->insert([
            'name' => 'pembeli 1',
            'email' => 'pembeli1@gmail.com',
            'no_hp' => '087866301812',
            'role' => 'Pembeli',
            'password' => bcrypt('pembeli123'),
        ]);
        DB::table('jenis_members')->insert([
            'nama_jenisMember' => 'Reguler',
        ]);
        DB::table('jenis_members')->insert([
            'nama_jenisMember' => 'Premium',
        ]);
        DB::table('jenis_members')->insert([
            'nama_jenisMember' => 'VIP',
        ]);

        DB::table('customers')->insert([
            // 'nama_customer' => 'Noklent Fardian',
            // 'alamat_customer' => 'Jl. Raya Cikarang',
            // 'no_telp_customer' => '087866301810',
            // 'user_id' => 2,
            // 'jenis_member_id' => 1,
            'customer_nama' => 'Noklent Fardian',
            'customer_noTelp' => '087866301810',
            'customer_alamat' => 'Jl. Raya Cikarang',
            'user_id' => 2,
            'jenis_member_id' => 1,
        ]);
        DB::table('customers')->insert([
            // 'nama_customer' => 'Berliana',
            // 'alamat_customer' => 'Jl. Raya Cikarang',
            // 'no_telp_customer' => '087866301811',
            // 'user_id' => 3,
            // 'jenis_member_id' => 2,
            'customer_nama' => 'Berliana',
            'customer_noTelp' => '087866301811',
            'customer_alamat' => 'Jl. Raya Cikarang',
            'user_id' => 3,
            'jenis_member_id' => 2,
        ]);

        DB::table('pegawais')->insert([
            'nama_pegawai' => 'Petugas 1',
            'alamat_pegawai' => 'Jl. Raya Cikarang',
            'no_telp_pegawai' => '087866301810',
            'email_pegawai' => '@gmail.com',
            'user_id' => 1,
        ]);
        DB::table('pegawais')->insert([
            'nama_pegawai' => 'Petugas 2',
            'alamat_pegawai' => 'Jl. Raya Cikarang',
            'no_telp_pegawai' => '087866301811',
            'email_pegawai' => '@gmail.com',
            'user_id' => 1,
        ]);
        DB::table('penyuplais')->insert([
            'nama_penyuplai' => 'Penyuplai Sabun',
            'alamat_penyuplai' => 'Jl. Raya Cikarang',
            'no_telp_penyuplai' => '087866301810',
        ]);
        DB::table('penyuplais')->insert([
            'nama_penyuplai' => 'Penyuplai Parfum',
            'alamat_penyuplai' => 'Jl. Raya Cikarang',
            'no_telp_penyuplai' => '087866301811',
        ]);
        DB::table('stocks')->insert([
            'nama_barang' => 'Sabun Cuci Rinso',
            'stok_barang' => 100,
            'satuan_barang' => 'pcs',
        ]);
        DB::table('stocks')->insert([
            'nama_barang' => 'Parfum Downy',
            'stok_barang' => 100,
            'satuan_barang' => 'liter',
        ]);
        DB::table('r_mensuplais')->insert([
            'id_penyuplai' => 1,
            'id_stock' => 1,
            'tanggal_mensuplai' => '2024-05-10',
            'jumlah_mensuplai' => 100,
            'satuan_mensuplai' => 'pcs',

        ]);
        DB::table('r_mensuplais')->insert([
            'id_penyuplai' => 2,
            'id_stock' => 2,
            'tanggal_mensuplai' => '2024-05-10',
            'jumlah_mensuplai' => 100,
            'satuan_mensuplai' => 'liter',
        ]);
    }
}
