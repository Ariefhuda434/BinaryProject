<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Report::create([
        //     'laporan' => 'sampah di rumah bg ujang',
        //     'images' => '/images/buset.src', 
        //     'description' => 'sampah nya sangat kotor dia parah men',
        //     'location' => 'medan kota kita',
        //     'category' => 'value',
        //     'date' => '2025-12-05',
        // ]);
        // User::create([
        //         'name' => 'Arief wicaksono',
        //         'email' => 'test1@example.com',
        //         'username' => 'ariefwicak18',
        //         'password' => bcrypt('12345'),
        //     ]);
        // User::factory(10)->create();

        $this->call([
            ReportSeeder::class,
        ]);
    }
}

