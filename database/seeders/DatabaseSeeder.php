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
                array('role_id' => "1", "email" => "restuarachan@gmail.com", "password" => bcrypt("admin"), 'nama' => 'restu', 'no_hp'=>'08112311617'),
                array('role_id' => "1", "email" => "restuarachan@gmail.com", "password" => bcrypt("admin"), 'nama' => 'restu', 'no_hp'=>'08112311617'),
                array('role_id' => "1", "email" => "restuarachan@gmail.com", "password" => bcrypt("admin"), 'nama' => 'restu', 'no_hp'=>'08112311617'),
            )
        );

        Role::insert(
            array(
                array('name' => "Admin"),
                array('name' => "Event Organizer"),
                array('name' => "Customer")
            )
        );

        Order::insert(
            array(
                array('cart_id' => "1", "tiket_id" => "1", "quantity" => "3"),
                array('cart_id' => "2", "tiket_id" => "3", "quantity" => "1"),
                array('cart_id' => "3", "tiket_id" => "2", "quantity" => "2"),
                array('cart_id' => "4", "tiket_id" => "6", "quantity" => "1"),
                array('cart_id' => "5", "tiket_id" => "11", "quantity" => "4"),

                array('cart_id' => "6", "tiket_id" => "20", "quantity" => "1"),
                array('cart_id' => "7", "tiket_id" => "16", "quantity" => "1"),
                array('cart_id' => "8", "tiket_id" => "12", "quantity" => "4"),
                array('cart_id' => "9", "tiket_id" => "8", "quantity" => "2"),
                array('cart_id' => "10", "tiket_id" => "4", "quantity" => "5"),
            )
        )
    }
}
