<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Report::create([
                'category' => 'value',
                'images' => '/images/buset.src', 
                'description' => 'sampah nya sangat kotor dia parah men',
                'location' => 'medan kota kita',
                'date' => '2025-12-05',
            ]);
        // User::factory(10)->create();

    
    }
}
