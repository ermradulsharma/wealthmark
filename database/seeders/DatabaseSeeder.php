<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Standard Seeder (Roles, Admin, Test User) - Recommended for Dev/Testing
        $this->call(StandardSeeder::class);

        // Bulk Data Import (Uncomment to load original 200MB dataset)
        // $this->call(ImportDataSeeder::class);
    }
}
