<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        User::create([
            'name' => 'Huỳnh Phan',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0123456789',
            'image' => null,
            'role' => 'admin',
            'status' => 'active',
            'password' => Hash::make('12345'), // Mật khẩu: password
        ]);

        User::create([
            'name' => 'Phạm Huy',
            'username' => 'vendor',
            'email' => 'vendor@gmail.com',
            'phone' => '0987654321',
            'image' => null,
            'role' => 'vendor',
            'status' => 'active',
            'password' => Hash::make('12345'), // Mật khẩu: password
        ]);

        User::create([
            'name' => 'Văn Bình',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '0111222333',
            'image' => null,
            'role' => 'user',
            'status' => 'active',
            'password' => Hash::make('12345'), // Mật khẩu: password
        ]);
    }
}
