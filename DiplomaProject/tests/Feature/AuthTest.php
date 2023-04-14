<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    protected $faker;
    /** @test */
    public function user_can_login_with_correct_credentials()
    {
        $user = User::factory()->create([
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password')
        ]);

        $response = $this->post('/login', [
            'email' => 'johndoe@example.com',
            'password' => 'password'
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function user_cannot_login_with_incorrect_credentials()
    {
        $user = User::factory()->create([
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password')
        ]);

        $response = $this->post('/login', [
            'email' => 'johndoe@example.com',
            'password' => 'wrong-password'
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    /** @test */
    public function user_cannot_login_with_empty_email_or_password_fields()
    {
        $response = $this->post('/login', [
            'email' => '',
            'password' => ''
        ]);

        $response->assertSessionHasErrors(['email', 'password']);
        $this->assertGuest();
    }


    /** @test */
/*    public function user_can_reset_password()
    {
        Notification::fake();

        $user = User::factory()->create();

        $response = $this->post('/reset', [
            'email' => $user->email,
        ]);

        //$response->assertSessionHas('status', 'We have emailed your password reset link!');
        $this->assertTrue(Hash::check('password', $user->fresh()->password));

        $token = Str::random(60);
        $response = $this->post('/reset', [
            'token' => $token,
            'email' => $user->email,
            'password' => 'new_password',
            'password_confirmation' => 'new_password',
        ]);

        //$response->assertSessionHas('status', 'Password has been reset!');
        //$response->assertRedirect('/logout');
        //$response->assertRedirect('/home');
        $user = $user->fresh();
        $this->assertTrue(Hash::check('new-password', $user->password));
    }*/


    /*public function testUserCanLoginWithRememberMe()
    {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
        'remember' => true,
    ]);

    $response->assertRedirect('/home');

    $this->assertAuthenticatedAs($user);

    $this->assertNotNull(Auth::guard()->getRecallerName());

    $response = $this->post('/logout');
    $response->assertRedirect('/login');

    $response = $this->get('/');
    $response->assertRedirect('/login');

    $cookie = $response->headers->getCookies()[0];

    $response = $this->withCookie($cookie)->get('/');
    $response->assertSuccessful();
    $this->assertAuthenticatedAs($user);
    }*/

//register
    /** @test */
     public function testUserCanViewRegisterForm()
    {
        $response = $this->get('/register');

        $response->assertSuccessful();
        $response->assertViewIs('auth.register');
    }

    /** @test */
    public function testUserCanRegister()
    {
        $this->faker = \Faker\Factory::create();
        $password = $this->faker->password(8);
        $userData = [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $password,
            'password_confirmation' => $password,
        ];

        $response = $this->post('/register', $userData);

        $response->assertRedirect('/home');
        $this->assertDatabaseHas('users', [
            'email' => $userData['email'],
        ]);
        $this->assertFalse(User::where('email', $userData['email'])->first()->hasVerifiedEmail());
        //$user = User::where('email', $email)->first();
        $this->assertTrue(Hash::check($password, User::where('email', $userData['email'])->first()->password));

    }

    /** @test */
    public function testUserCannotRegisterWithoutName()
    {
        $this->faker = \Faker\Factory::create();
        $userData = [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(8),
            'password_confirmation' => $this->faker->password(8),
        ];

        $response = $this->from('/register')->post('/register', $userData);

        $response->assertSessionHasErrors('name');
        $this->assertDatabaseMissing('users', [
            'email' => $userData['email'],
        ]);
    }

    /** @test */
    public function testUserCannotRegisterWithoutEmail()
    {
        $this->faker = \Faker\Factory::create();
        $userData = [
            'name' => $this->faker->name(),
            'password' => $this->faker->password(8),
            'password_confirmation' => $this->faker->password(8),
        ];

        $response = $this->from('/register')->post('/register', $userData);

        $response->assertSessionHasErrors('email');
        $this->assertDatabaseMissing('users', [
            'name' => $userData['name'],
        ]);
    }

    /** @test */
    public function testUserCannotRegisterWithInvalidEmail()
    {
        $this->faker = \Faker\Factory::create();
        $userData = [
            'name' => $this->faker->name(),
            'email' => 'invalid-email',
            'password' => $this->faker->password(8),
            'password_confirmation' => $this->faker->password(8),
        ];

        $response = $this->from('/register')->post('/register', $userData);

        $response->assertSessionHasErrors('email');
        $this->assertDatabaseMissing('users', [
            'name' => $userData['name'],
        ]);
    }

    /** @test */
    public function testUserCannotRegisterWithoutPassword()
    {
        $this->faker = \Faker\Factory::create();
        $userData = [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
        ];

        $response = $this->from('/register')->post('/register', $userData);

        $response->assertSessionHasErrors('password');
        $this->assertDatabaseMissing('users', [
            'email' => $userData['email'],
        ]);
    }

    /** @test */
    public function testUserCannotRegisterWithPasswordsNotMatching()
    {
        $this->faker = \Faker\Factory::create();
        $userData = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => 'password',
            'password_confirmation' => 'wrongpassword',
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors('password');
    }

    /** @test */
    public function testUserCannotRegisterWithExistingEmail()
    {
        $existingUser = User::factory()->create();

        $userData = [
            'name' => 'John Doe',
            'email' => $existingUser->email,
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->post('/register', $userData);
        $response->assertSessionHasErrors('email');
    }

    /** @test */
    public function testUserCannotRegisterWithWeakPassword()
    {
        $this->faker = \Faker\Factory::create();
        $userData = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '1234567', // weak password
            'password_confirmation' => '1234567', // weak password
        ];

        $response = $this->post('/register', $userData);

        //$response->assertRedirect('/register');
        $response->assertSessionHasErrors('password');

        $this->assertDatabaseMissing('users', [
            'name' => $userData['name'],
            'email' => $userData['email'],
        ]);
    }

}
