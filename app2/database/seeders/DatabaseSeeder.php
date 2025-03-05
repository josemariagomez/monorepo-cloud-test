<?php

namespace Database\Seeders;

use Altra\Domains\TestModel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        foreach (range(1, 1000000) as $i) {
            TestModel::create([
                'name' => fake()->name(),
                'description' => 'This is a test model.',
            ]);
        }
    }
}
