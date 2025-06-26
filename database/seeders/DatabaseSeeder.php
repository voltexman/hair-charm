<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Gallery::factory()->count(20)->create();

        $this->call([
            ProductSeeder::class,
        ]);
    }
}
