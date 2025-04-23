<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Register')  //menkan link untuk register
                    ->assertPathIs('/register') // memastikan url regiter
                    ->type('name','name') //mengisi input nama
                    ->type('email','user@gmail.com') //mengisi input yang memiliki atribut email
                    ->type('password','password') //mengisi input yang memiliki atribut password
                    ->press('REGISTER'); // menekan tombol register

        });
    }
}
