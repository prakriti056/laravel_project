<?php

namespace Database\Factories;

use App\Models\JobType;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobTypeFactory extends Factory
{
    protected $model = JobType::class;

    public function definition(): array
    {
        return [
            // either pick existing category or create a new one
           
            'name'        => $this->faker->unique()->jobTitle(),
          
        ];
    }
}
