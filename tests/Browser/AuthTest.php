<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\Models\User;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {

        $this->browse(function ($browser){
            $browser->loginAs(User::find(1))
                    ->visit('/kecamatan')
                    ->assertSee('Kecamatan')
                    ->storeConsoleLog('test');;
        });
    }
}
