<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tiket;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::insert(
            array(
                array('role_id' => 1, "email" => "restu@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Restu', 'no_hp'=>'081111111111'),
                array('role_id' => 2, "email" => "alexsandra@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Alexandra', 'no_hp'=>'082222222222'),
                array('role_id' => 3, "email" => "boltez@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Boltez', 'no_hp'=>'083333333333'),
                array('role_id' => 3, "email" => "hikaru@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Hikaru', 'no_hp'=>'084444444444'),
                array('role_id' => 3, "email" => "boltez@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Boltez', 'no_hp'=>'083333333333'),
            )
        );

        Tiket::insert(
            array(
                array('event_id' => 1, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga'=>50000),
                array('event_id' => 1, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>150000),
                array('event_id' => 1, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga'=>50000),
                array('event_id' => 1, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>200000),

                array('event_id' => 2, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>50000),
                array('event_id' => 2, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>150000),
                array('event_id' => 2, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga'=>50000),
                array('event_id' => 2, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>200000),

                array('event_id' => 3, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga'=>50000),
                array('event_id' => 3, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>150000),
                array('event_id' => 3, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga'=>50000),
                array('event_id' => 3, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>200000),

                array('event_id' => 4, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>50000),
                array('event_id' => 4, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>150000),
                array('event_id' => 4, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga'=>50000),
                array('event_id' => 4, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>200000),

                array('event_id' => 5, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga'=>50000),
                array('event_id' => 5, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>150000),
                array('event_id' => 5, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga'=>50000),
                array('event_id' => 5, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga'=>200000),
            )
        );
    }
}
