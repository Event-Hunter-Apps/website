<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_success_login_user_as_admin() {
        
        $response = $this->post('/login', [
            'email' => 'restuarachman@gmail.com',
            'password' => '1234',
        ]);
        
        $response->assertStatus(302);
    }

    public function test_success_login_user_as_custommer() {
        
        $response = $this->post('/login', [
            'email' => 'restuarachman@gmail.com',
            'password' => '1234',
        ]);
        
        $response->assertStatus(302);
    }

    public function test_success_login_user_as_eo() {
        
        $response = $this->post('/login', [
            'email' => 'restuarachman@gmail.com',
            'password' => '1234',
        ]);
        
        $response->assertStatus(302);
    }

    public function test_failed_login_user() {
        
        $response = $this->post('/login', [
            'email' => 'restuarachman@gmail.com',
            'password' => '1',
        ]);

        $response->assertStatus(302);
    }
}
