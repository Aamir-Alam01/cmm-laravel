<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function login_page_loads_correctly()
    {
        $response = $this->get('admin/login'); 

        $response->assertStatus(200);
        $response->assertSee('Login'); 
    }

//     use RefreshDatabase;
//     /** @test */
//     public function user_can_login_with_valid_credentials()
//     {
//         try {
//             $user = User::factory()->create([
//                 'name' => 'Sam',
//                 'email' => 'sam@gmail.com',
//                 'password' => bcrypt('sam123'), 
//             ]);
//         } catch (\Exception $e) {
//             dd($e->getMessage()); 
//         }

//         $response = $this->post('admin/login', [
//             'email' => 'sam@gmail.com',
//             'password' => 'sam123', 
//         ]);

//         $response->assertRedirect('/dashboard'); 
//         $this->assertAuthenticatedAs($user);
//  }
}
