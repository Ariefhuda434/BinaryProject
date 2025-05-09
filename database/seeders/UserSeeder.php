<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class UserSeeder extends Seeder
{
    public function run()
    {
             User::create([
            'name' => 'Arief Huda',
            'username' => 'ariefhuda',
            'email' => 'arief@example.com',
            'password' => Hash::make('password123'),
            'birth' => '2000-01-01',
            'jenis_kel' => 'pria',
            'profesi' => 'programmer',
            'phone' => 81234567,
            'kota' => 'medan',
            'kecamatan' => 'medan johor',
        ]);
    }
}
