<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle(),
            'salary' => '$'.$this->faker->numberBetween($min = 1000, $max = 9000),
        ];
    }
}
