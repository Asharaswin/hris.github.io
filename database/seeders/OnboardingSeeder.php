<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OnboardingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =  \App\Models\User::where('role', 0)->get();
        foreach ($users as $user) {
            \App\Models\Onboarding::create([
                'user_id' => $user->id,
                'percentage' => fake()->randomElement([125, 250, 325, 500, 625, 750, 825, 1000])
            ]);
        }
    }
}
