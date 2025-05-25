<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Report;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReportSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed user dummy dulu (jika diperlukan)
        User::factory(10)->create();

        // Seed 10 data report
        for ($i = 1; $i <= 10; $i++) {
            Report::create([
                'judul' => "Laporan Sampah #$i",
                'foto' => "/images/sample$i.jpg",
                'description' => "Deskripsi laporan ke-$i: Ada penumpukan sampah di lokasi ini.",
                'location' => "Kecamatan $i, Kota Bersih",
            ]);
        }
    }
}
