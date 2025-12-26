<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobType;

class JobTypeSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        JobType::factory()
            ->count(5)
            ->create();
    }
}
