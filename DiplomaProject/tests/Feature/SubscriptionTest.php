<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use App\Models\Subscriber;

class SubscriptionTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    
    /** @test */
    public function it_shows_success_message_after_subscribing()
    {
        Mail::fake();
        
        $response = $this->post(route('subscribers.store'), [
            'email' => 'test@example.com'
        ]);

        $response->assertRedirect(url()->previous() . '#subs');
        $response->assertSessionHas('status_good', 'Thanks for subscribing!');
        $this->assertDatabaseHas('subscribers', [
            'email' => 'test@example.com'
        ]);

    }

    /** @test */
    public function it_shows_error_message_when_email_already_subscribed()
    {
        $email = 'test@example.com';

        $this->post(route('subscribers.store'), ['email' => $email]);

        $response = $this->post(route('subscribers.store'), ['email' => $email]);

        $response->assertRedirect()->assertSessionHas('status_bad', 'You are already subscribed!');

        $this->assertDatabaseCount('subscribers', 1);
    }

    /** @test */
    public function it_shows_error_message_when_email_field_is_empty()
    {
        $response = $this->post(route('subscribers.store'), []);

        $response->assertRedirect(url()->previous() . '#subs');
        $response->assertSessionHas('status_bad', 'Please fill out the field!');
        $this->assertDatabaseCount('subscribers', 0);
    }

    /** @test */
    public function it_shows_error_message_when_email_field_is_invalid()
    {
        $response = $this->post(route('subscribers.store'), [
            'email' => 'invalid-email'
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertDatabaseCount('subscribers', 0);
    }
}
