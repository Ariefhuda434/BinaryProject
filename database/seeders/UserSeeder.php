<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => Hash::make('password'), 
                'tanggal_lahir' => now()->subYears(rand(18, 40))->format('Y-m-d'),
                'jenis_kel' => rand(0, 1) ? 'Laki-laki' : 'Perempuan',
                'phone' => '0812' . rand(10000000, 99999999),
                'alamat' => 'Alamat User ' . $i,
                'verification_token' => Str::random(60),
            ]);
        }
    }
}
