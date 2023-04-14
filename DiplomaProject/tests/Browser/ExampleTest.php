<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */


    public function testBasicExample(): void
    {
         $this->browse(function (Browser $browser) {
            $browser->visit('actors')
                    ->assertSee('actors');

            $browser->visit('/lakes-locations')
                    ->assertSee('LAKES');

            $browser->visit('/production')
                    ->assertSee('production');

            $browser->visit('/dubbing-subtitling')
                    ->assertSee('DUBBING&SUBTITLING');

            $browser->visit('/budget')
                    ->assertSee('budget');

            $browser->visit('/equipment')
                    ->assertSee('equipment');

            $browser->visit('/arid-locations')
                    ->assertSee('ARID');

        });
    }

    public function testContactFormWhenSuccess(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('CONTACT')
                ->assertSee('CONTACT US')
                ->type('name', 'Sevda')
                ->type('email', 'sevdapoladova1@gmail.com')
                ->type('subject', 'Test Subject')
                ->type('message', 'Test Message')
                ->pause(1000) // Wait for 1 second
                ->waitFor('input[type="submit"][value="SEND MESSAGE"]') // Wait for the button to become clickable
                ->press('input[type="submit"][value="SEND MESSAGE"]')
                ->waitForText('Contact Form Submit Successfully!')
                ->assertSee('Contact Form Submit Successfully!');
                            
        });
    }

   /* public function testContactFormWhenError(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('CONTACT')
                ->assertSee('CONTACT US')
                ->type('email', 'sevdapoladova1@gmail.com')
                ->type('subject', 'Test Subject')
                ->type('message', 'Test Message')
                ->pause(5000) // Wait for 1 second
                ->waitFor('input[type="submit"][value="SEND MESSAGE"]') // Wait for the button to become clickable
                ->press('input[type="submit"][value="SEND MESSAGE"]')
                ->waitForText('All fields must be filled in!')
                ->assertSee('All fields must be filled in!')
                ->assertValue('input[name="name"]', '')
                ->assertValue('input[name="email"]', 'sevdapoladova1@gmail.com')
                ->assertValue('input[name="subject"]', 'Test Subject')
                ->assertValue('textarea[name="message"]', 'Test Message');
        });
    }

     public function testSubscribersFormWhenSuccess(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/catalog')
                ->assertSee('LET\'S KEEP IN TOUCH')
                ->type('email', 'sevdapoladova1@gmail.com')
                ->pause(1000) // Wait for 1 second
                ->press('SEND')
                ->waitForText('Thanks for subscribing!')
                ->assertSee('Thanks for subscribing!');
                //->assertDatabaseHas('subscribers', ['email' => 'sevdapoladova1@gmail.com']);

        });
    }
     public function testSubscribersFormWhenError(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/catalog')
                ->pause(1000) // Wait for 1 second
                ->press('SEND')
                ->waitForText('Please fill out the field!')
                ->assertSee('Please fill out the field!');
        });
    }
    public function testSubscribersFormWhenError2(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/catalog')
                ->type('email', 'sevdapoladova1@gmail.com')
                ->pause(1000) // Wait for 1 second
                ->press('SEND')
                ->waitForText('You are already subscribed!')
                ->assertSee('You are already subscribed!');
        });
    }

     public function testLinks(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSeeLink('VIEW MORE')
                ->clickLink('VIEW MORE')
                ->assertPathIs('/catalog')
                ->back()
                ->assertSeeLink('ARID')
                ->clickLink('ARID')
                ->assertPathIs('/arid-locations')
                ->back()
                ->assertSeeLink('SOVIET')
                ->clickLink('SOVIET')
                ->assertPathIs('/soviet-locations')
                ->back()
                ->assertSeeLink('HISTORICAL')
                ->clickLink('HISTORICAL')
                ->assertPathIs('/historical-locations')
                ->back()
                ->assertSeeLink('MOUNTAINS')
                ->clickLink('MOUNTAINS')
                ->assertPathIs('/mountain-locations')
                ->back()
                ->assertSeeLink('LAKES')
                ->clickLink('LAKES')
                ->assertPathIs('/lakes-locations')
                ->back()
                ->assertSeeLink('MODERN')
                ->clickLink('MODERN')
                ->assertPathIs('/modern-locations')
                ->back();

            $browser->visit('/catalog')
                ->assertSee('HOW TO PURCHASE MOVIE')
                ->assertSeeLink('HOME')
                ->clickLink('HOME')
                ->assertPathIs('/')
                ->assertRouteIs('indexpage')
                ->back();
                //->assertSeeLink('STORM')
                //->clickLink('STORM');
                //->assertSee('STORM');
        });
    }*/


}
