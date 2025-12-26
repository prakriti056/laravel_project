<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {

        \App\Models\User::factory(10)->create();
        //  $this->call([
            // If you have these seeders, ensure they’re included
           //   CategorySeeder::class,
            //  JobTypeSeeder::class,

          
        //  ]);
    }
}
