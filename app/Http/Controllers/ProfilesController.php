<?php

namespace App\Http\Controllers;

use App\User;

class ProfilesController extends Controller
{
    public function index($username)
    {
        $user = User::where("username", $username)->firstOrFail();
        return view('profile.index', [
            'user' => $user,
        ]);
    }
}
