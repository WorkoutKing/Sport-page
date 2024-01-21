<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['name' => 'Wall Handstand', 'points' => 14, 'r_or_s' => 'Seconds'],
            ['name' => 'Handstand', 'points' => 15, 'r_or_s' => 'Seconds'],
            ['name' => 'Wall Handstand PU', 'points' => 19, 'r_or_s' => 'Repetitions'],
            ['name' => 'Handstand Push Up', 'points' => 21, 'r_or_s' => 'Repetitions'],
            ['name' => 'One Arm Handstand', 'points' => 30, 'r_or_s' => 'Seconds'],
            ['name' => 'German Hang', 'points' => 1, 'r_or_s' => 'Seconds'],
            ['name' => 'Tuck Back Lever', 'points' => 5, 'r_or_s' => 'Seconds'],
            ['name' => 'Advance Back Lever ', 'points' => 6, 'r_or_s' => 'Seconds'],
            ['name' => 'Straddle Back Lever ', 'points' => 22, 'r_or_s' => 'Seconds'],
            ['name' => 'Full Back Lever ', 'points' => 23, 'r_or_s' => 'Seconds'],
            ['name' => 'Full Back Lever Pull Ups ', 'points' => 29, 'r_or_s' => 'Repetitions'],
            ['name' => 'Rows/Australian Pull Ups ', 'points' => 3, 'r_or_s' => 'Repetitions'],
            ['name' => 'Tuck L-sit ', 'points' => 3, 'r_or_s' => 'Seconds'],
            ['name' => 'L-sit ', 'points' => 5, 'r_or_s' => 'Seconds'],
            ['name' => 'Tuck Front Lever ', 'points' => 9, 'r_or_s' => 'Seconds'],
            ['name' => 'Advance Front Lever ', 'points' => 19, 'r_or_s' => 'Seconds'],
            ['name' => 'Straddle Front Lever ', 'points' => 26, 'r_or_s' => 'Seconds'],
            ['name' => 'Full Front Level ', 'points' => 28, 'r_or_s' => 'Seconds'],
            ['name' => 'Straddle Front Lever Pull Ups ', 'points' => 30, 'r_or_s' => 'Repetitions'],
            ['name' => 'Full Front Lever Pull Ups ', 'points' => 31, 'r_or_s' => 'Repetitions'],
            ['name' => 'Hang Pull FL to inverted ', 'points' => 35, 'r_or_s' => 'Repetitions'],
            ['name' => 'Circle Front Lever ', 'points' => 36, 'r_or_s' => 'Repetitions'],
            ['name' => 'Lean Planche ', 'points' => 3, 'r_or_s' => 'Seconds'],
            ['name' => 'Frog Stand ', 'points' => 4, 'r_or_s' => 'Seconds'],
            ['name' => 'Tuck Planche ', 'points' => 19, 'r_or_s' => 'Seconds'],
            ['name' => 'Advance Planche ', 'points' => 24, 'r_or_s' => 'Seconds'],
            ['name' => 'Straddle Planche ', 'points' => 25, 'r_or_s' => 'Seconds'],
            ['name' => 'Full Planche ', 'points' => 31, 'r_or_s' => 'Seconds'],
            ['name' => 'Muscle Up ', 'points' => 26, 'r_or_s' => 'Repetitions'],
            ['name' => 'Wide Muscle Up ', 'points' => 27, 'r_or_s' => 'Repetitions'],
            ['name' => 'L-Sit Muscle Up ', 'points' => 29, 'r_or_s' => 'Repetitions'],
            ['name' => 'Full Squat ', 'points' => 3, 'r_or_s' => 'Repetitions'],
            ['name' => 'Assisted Pistol Squat ', 'points' => 14, 'r_or_s' => 'Repetitions'],
            ['name' => 'Shrimp Squat ', 'points' => 19, 'r_or_s' => 'Repetitions'],
            ['name' => 'Pistol Squat ', 'points' => 23, 'r_or_s' => 'Repetitions'],
            ['name' => 'NC Negative ', 'points' => 23, 'r_or_s' => 'Repetitions'],
            ['name' => 'Nordic Curl ', 'points' => 24, 'r_or_s' => 'Repetitions'],
            ['name' => 'Adv Tuck Dragon Flag ', 'points' => 16, 'r_or_s' => 'Repetitions'],
            ['name' => 'Straddle Dragon Flag ', 'points' => 19, 'r_or_s' => 'Repetitions'],
            ['name' => 'Dragon Flag ', 'points' => 20, 'r_or_s' => 'Repetitions'],
            ['name' => 'Ab Wheel ', 'points' => 24, 'r_or_s' => 'Repetitions'],
            ['name' => 'Ankle Weight dragon Flag ', 'points' => 30, 'r_or_s' => 'Repetitions'],
            ['name' => 'One Arm Dragon Flag ', 'points' => 31, 'r_or_s' => 'Repetitions'],
            ['name' => 'One Arm Ab Wheel ', 'points' => 34, 'r_or_s' => 'Repetitions'],
        ]);
    }
}
//['name' => '','points'=>],
// 878 points
