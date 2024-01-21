<?php

namespace App\Http\Controllers;

class UsersSettingsController extends Controller
{
    public function index()
    {
        return view('profiles.settings.settings');
    }
}
