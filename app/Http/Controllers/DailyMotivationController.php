<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class DailyMotivationController extends Controller
{
    public function show()
    {
        $quote = Quote::inRandomOrder()->first();

        return view('daily_motivation.show', ['quote' => $quote]);
    }
}
