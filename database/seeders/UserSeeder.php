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
            User::create(
                [
            'role' => 'admin',
            'name' => 'admin',
            'username' => 'admin123',
            'email' => 'binarywaste@gmail.com.com',
            'password' => bcrypt('admin123'),
            'birth' => '2000-01-01',
            'jenis_kel' => 'laki-laki',
            'profesi' => 'programmer',
            'phone' => 81234557,
            'kota' => 'medan',
            'kecamatan' => 'medan johor',
                ],
    );

    }
}
