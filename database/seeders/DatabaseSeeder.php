<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => 'adminpassword',
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@gmail.com',
            'password' => 'adminpassword',
            'role' => 'user',
        ]);

        Category::create(['name' => 'ยาบรรเทาปวด']);
        Category::create(['name' => 'ยาฆ่าเชื้อ']);
        Category::create(['name' => 'วิตามิน']);
        Category::create(['name' => 'ยาลดไข้']);
        Category::create(['name' => 'ยาลดความดัน']);

    }
}
