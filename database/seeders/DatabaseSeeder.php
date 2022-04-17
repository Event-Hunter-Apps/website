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

        
    }
}
