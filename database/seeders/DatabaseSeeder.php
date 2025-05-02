<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create([
        //         'name' => 'Arief wicaksono',
        //         'username' => 'ariefwicak18',
        //         'email' => 'test1@example.com',
        //         'password' => bcrypt('12345')
                
        //     ]);
        // User::factory(10)->create();

        $this->call([
            ReportSeeder::class,
        ]);
    }
}

