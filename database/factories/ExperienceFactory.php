<?php

namespace Database\Factories;

use App\Enums\ExperienceTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'entity_name' => $this->faker->company(),
            'type' => $this->faker->randomElement(ExperienceTypeEnum::toArray()),
            'entity_website_url' => $this->faker->url(),
            'entity_logo_url' => $this->faker->imageUrl(),
            'start_at' => $this->faker->dateTimeBetween('-10 years', '-1 years'),
            'end_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'role' => $this->faker->jobTitle(),
            'responsibility' => $this->faker->paragraphs(3, true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
