User::create([
     array(
                array('role_id' => "1", "email" => "restuarachman@gmail.com", "password" => bcrypt("admin"), 'nama' => 'restu', 'no_hp'=>'081312311617', "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
            )
])