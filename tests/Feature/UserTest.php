<?php

// tests/Feature/UserTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_be_created()
    {
        $user = User::create([
            'id' => 'user2',
            'name' => 'prueba',
            'last_name' => 'Doe',
            'email' => 'prueba@example.com',
            'password' => bcrypt('secret'),
            'permissions' => 'user',
            'trial_ends_at' => now()->addDays(30)
        ]);

        $this->assertDatabaseHas('users', [
            'id' => 'user2',
            'name' => 'prueba'
        ]);
    }
}

