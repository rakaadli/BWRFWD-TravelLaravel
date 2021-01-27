<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
<<<<<<< HEAD
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
=======
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
<<<<<<< HEAD
        'midtrans/*'
=======
        //
>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
    ];
}
