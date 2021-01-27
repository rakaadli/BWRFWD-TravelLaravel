<?php

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Broadcast;

>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
