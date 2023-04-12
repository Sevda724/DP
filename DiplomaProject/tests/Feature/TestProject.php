<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

use Illuminate\Support\Facades\Mail;


class TestProject extends TestCase
{
    use RefreshDatabase, WithFaker;


    /** @test */
    public function test_submit_contact_form_successfully()
{
    Mail::fake(); 

    $data = [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'subject' => 'Test Subject',
        'message' => 'Test Message',
    ];

    $response = $this->post(route('contact-form.store'), $data);

    $response->assertStatus(302);
    $response->assertRedirect(url()->previous().'#contact');
    $this->assertDatabaseHas('contacts', $data);

     // Check if email was sent
    
}

    /** @test */
    public function it_shows_validation_errors_for_required_fields()
    {
        $response = $this->post(route('contact-form.store'), []);

        $response->assertSessionHas('status-mess-err', 'All fields must be filled in!');
    }

    /** @test */
    public function it_shows_validation_errors_for_invalid_email()
    {
        $response = $this->post(route('contact-form.store'), [
            'name' => $this->faker->name,
            'email' => 'invalid email',
            'subject' => $this->faker->sentence,
            'message' => $this->faker->paragraph,
        ]);

        $response->assertSessionHasErrors(['email']);
    }
}
