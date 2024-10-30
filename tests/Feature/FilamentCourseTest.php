<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class FilamentCourseTest extends TestCase
{
    use RefreshDatabase;

    // /** @test */
    // public function an_admin_can_create_a_course()
    // {
    //     // Create an admin user
    //     $admin = User::factory()->create([
    //         'name' => 'admin',
    //         'email' => 'admin@example.com',
    //         'password' => 'admin',
    //     ]);

    //     // Acting as admin
    //     $this->actingAs($admin);

    //     // Simulate form submission with data
    //     $response = $this->post('/admin/courses', [
    //         'title' => 'New Course',
    //         'description' => 'Course description',
    //         'instructor' => 'Aamir',
    //     ]);

    //     // Assert the course was created in the database
    //     $this->assertDatabaseHas('courses', [
    //         'title' => 'New Course',
    //     ]);

    //     // Assert the form redirects or succeeds
    //     $response->assertRedirect('/admin/courses'); // Or wherever it redirects after creation
    // }
}
