<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\OnlineUser;

class FooterController extends Controller
{
    public function getOnlineUsersCount()
    {
        $count = OnlineUser::where('last_seen', '>', Carbon::now()->subMinutes(5))
            ->count();

        return $count;
    }
}
