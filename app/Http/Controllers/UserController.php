<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): Response
    {
        return Inertia::render('User/Show', [
            'user' => [
                'id' => 666,
                'name' => 'Sophie'
            ]
        ]);
    }
}
