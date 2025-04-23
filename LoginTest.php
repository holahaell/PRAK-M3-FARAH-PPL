<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Log in') //menkan link untuk login
                    ->assertPathIs('/login') // memastikan url login
                    ->type('email','rahil@gmail.com') // mengisi input email yang telah terdaftar
                    ->type('password','12345678') // mengisi input password yang telah terdaftar
                    ->press('LOG IN') //menekan button login
                    ->assertPathIs('/dashboard'); //memastikan berhasil login dan menampilkan /dashboard
        });
    }
}
