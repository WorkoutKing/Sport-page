<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;


class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quote::create(['text' => '<b>Stay Committed:</b> Every day counts. Your dedication sets you apart!']);
        Quote::create(['text' => '<b>Celebrate Small Wins:</b> Reflect on your progress, no matter how small. Acknowledge and celebrate each achievement.']);
        Quote::create(['text' => '<b>Adjust and Refocus:</b> If needed, redesign your goals. Keeping them realistic ensures long-term success.']);
        Quote::create(['text' => '<b>Embrace Variety:</b> Spice up your routine with new workouts or calisthenics moves. Variety keeps things exciting!']);
        Quote::create(['text' => '<b>Community Power:</b> Lean on us. Share successes, seek advice, and inspire each other. We`re in this together!']);
        Quote::create(['text' => '<b>Balancing Act: Complex Carbohydrates for Energy</b> on incorporating complex carbohydrates like quinoa, sweet potatoes, and whole grains into your meals']);
        Quote::create(['text' => '<b>Sustained Energy:</b> Complex carbs release energy gradually, providing a sustained source of fuel for your workouts.']);
        Quote::create(['text' => '<b>Timing Matters:</b> Aim to consume complex carbs a few hours before your exercise routine. This will give you the sustained energy needed for those demanding workouts.']);
        Quote::create(['text' => '<b>Delicious Options:</b> There are plenty of delicious and nutritious ways to incorporate complex carbs into your meals.']);
        Quote::create(['text' => '<b>Effective Recovery:</b> Give your muscles the time they need to bounce back.']);
        Quote::create(['text' => '<b>Consistent Progress:</b> Consistency is key on your journey to becoming stronger.']);
        Quote::create(['text' => '<b>Adaptation:</b> Twice-a-week training strikes the right balance for muscle growth. It allows your body to adapt and respond positively to the demands of strength training.']);
        Quote::create(['text' => '<b>Prioritize Recovery:</b> Remember, muscles grow stronger during rest, so embrace those recovery days. They are just as crucial as your workout days.']);
    }
}
