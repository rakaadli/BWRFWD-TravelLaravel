<?php

use Illuminate\Foundation\Inspiring;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Artisan;
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
