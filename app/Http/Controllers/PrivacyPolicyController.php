<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    public function showPrivacyPolicy()
    {
        return view('profiles.privacy.privacy_policy');
    }

}