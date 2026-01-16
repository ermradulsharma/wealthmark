<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Increase memory limit for large SQL dump
        ini_set('memory_limit', '-1');

        $path = database_path('data_seed.sql');

        if (File::exists($path)) {
            // Use unprepared execution for raw SQL dumps (faster, handles large files better)
            // Note: DB::unprepared doesn't return success/fail boolean in all drivers, so we wrap in try-catch
            try {
                DB::unprepared(File::get($path));
                $this->command->info('Data imported successfully from data_seed.sql');
            } catch (\Exception $e) {
                $this->command->error('Error importing data: ' . $e->getMessage());
            }
        } else {
            $this->command->warn('data_seed.sql not found in database/ directory.');
        }
    }
}
