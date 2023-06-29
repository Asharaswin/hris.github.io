<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =  \App\Models\User::all();
        foreach ($users as $user) {
            \App\Models\UserContract::create([
                'user_id' => $user->id,
                'job_level' => fake()->randomElement(['CEO', 'Leader', 'Staff']),
                'status' => fake()->randomElement(['Probation', 'Contract', 'Permanent']),
                'contract_start' => fake()->date(),
                'duration' => fake()->numberBetween($min = 0, $max = 100),
                'duration_type' => fake()->randomElement(['Hari', 'Bulan', 'Tahun'])
            ]);
        }
    }
}
