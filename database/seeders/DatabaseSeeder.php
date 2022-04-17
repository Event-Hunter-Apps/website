<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tiket;
use App\Models\Order;
use App\Models\Role;
use App\Models\Kategori;
use App\Models\Event;

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

        Role::insert(
            array(
                array('name' => "Admin"),
                array('name' => "Event Organizer"),
                array('name' => "Customer")
            )
        );

        User::insert(
            array(
                array('role_id' => 1, "email" => "restu@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Restu', 'no_hp' => '081111111111'),
                array('role_id' => 2, "email" => "alexsandra@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Alexandra', 'no_hp' => '082222222222'),
                array('role_id' => 3, "email" => "boltez@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Boltez', 'no_hp' => '083333333333'),
                array('role_id' => 3, "email" => "hikaru@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Hikaru', 'no_hp' => '084444444444'),
                array('role_id' => 3, "email" => "boltez@gmail.com", "password" => bcrypt("1234"), 'nama' => 'Boltez', 'no_hp' => '083333333333'),
            )
        );

        Tiket::insert(
            array(
                array('event_id' => 1, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga' => 50000),
                array('event_id' => 1, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 150000),
                array('event_id' => 1, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga' => 50000),
                array('event_id' => 1, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 200000),

                array('event_id' => 2, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 50000),
                array('event_id' => 2, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 150000),
                array('event_id' => 2, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga' => 50000),
                array('event_id' => 2, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 200000),

                array('event_id' => 3, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga' => 50000),
                array('event_id' => 3, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 150000),
                array('event_id' => 3, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga' => 50000),
                array('event_id' => 3, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 200000),

                array('event_id' => 4, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 50000),
                array('event_id' => 4, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 150000),
                array('event_id' => 4, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga' => 50000),
                array('event_id' => 4, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 200000),

                array('event_id' => 5, "kategori_id" => 1, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga' => 50000),
                array('event_id' => 5, "kategori_id" => 1, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 150000),
                array('event_id' => 5, "kategori_id" => 2, "nama" => "Anak - Anak", 'deskripsi' => 'Hanya untuk anak balita', 'harga' => 50000),
                array('event_id' => 5, "kategori_id" => 2, "nama" => "Dewasa", 'deskripsi' => 'Untuk usia diatas 18 tahun', 'harga' => 200000),
            )
        );


        Order::insert(
            array(
                array('cart_id' => 1, "tiket_id" => 1, "quantity" => 3),
                array('cart_id' => 2, "tiket_id" => 3, "quantity" => 1),
                array('cart_id' => 3, "tiket_id" => 2, "quantity" => 2),
                array('cart_id' => 4, "tiket_id" => 6, "quantity" => 1),
                array('cart_id' => 5, "tiket_id" => 11, "quantity" => 4),

                array('cart_id' => 6, "tiket_id" => 20, "quantity" => 1),
                array('cart_id' => 7, "tiket_id" => 16, "quantity" => 1),
                array('cart_id' => 8, "tiket_id" => 12, "quantity" => 4),
                array('cart_id' => 9, "tiket_id" => 8, "quantity" => 2),
                array('cart_id' => 10, "tiket_id" => 4, "quantity" => 5),
            )
        );

        Kategori::insert(
            array(
                array("nama" => "Normal",),
                array("nama" => "Special",),
            )
        );

        Event::insert(
            array(
                array('user_id' => "1", "nama" => "Monas", "deskripsi" => "Deskripsi Monas", 'tanggal_mulai' => '2022-04-12', 'tanggal_berakhir' => '2022-04-14', "jam_buka" => "10:30", "jam_tutup" => "17:30", "lokasi" => "Jalan Jakarta", "kota" => "Jakarta", "harga" => "5000", "image" => "Events/1.png",),
                array('user_id' => "1", "nama" => "Gedung Sate", "deskripsi" => "Deskripsi Gedung Sate", 'tanggal_mulai' => '2022-04-13', 'tanggal_berakhir' => '2022-04-16', "jam_buka" => "11:30", "jam_tutup" => "19:30", "lokasi" => "Jalan Bandung", "kota" => "Bandung", "harga" => "10000", "image" => "Events/2.png",),
                array('user_id' => "1", "nama" => "Tugu Buaya", "deskripsi" => "Deskripsi Tugu Buaya", 'tanggal_mulai' => '2022-04-14', 'tanggal_berakhir' => '2022-04-18', "jam_buka" => "12:30", "jam_tutup" => "21:30", "lokasi" => "Jalan Surabaya", "kota" => "Surabaya", "harga" => "15000", "image" => "Events/3.png",),
                array('user_id' => "1", "nama" => "Museum Aceh", "deskripsi" => "Deskripsi Museum Aceh", 'tanggal_mulai' => '2022-04-15', 'tanggal_berakhir' => '2022-04-20', "jam_buka" => "13:30", "jam_tutup" => "22:30", "lokasi" => "Jalan Aceh", "kota" => "Aceh", "harga" => "20000", "image" => "Events/4.png",),
                array('user_id' => "1", "nama" => "Museum The Colo Madu", "deskripsi" => "Deskripsi Museum The Colo Madu", 'tanggal_mulai' => '2022-04-16', 'tanggal_berakhir' => '2022-04-22', "jam_buka" => "14:30", "jam_tutup" => "20:30", "lokasi" => "Jalan Solo", "kota" => "Solo", "harga" => "25000", "image" => "Events/5.png",),

            )
        );
    }
}
