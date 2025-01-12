<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::first();

        $experience = \App\Models\Experience::factory(10)->make();

        if ($user) {
            $user->experiences()->createMany($experience->toArray());
        }
    }
}
