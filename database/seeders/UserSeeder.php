<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Afiv Dicky Efendy',
            'email' => 'dickyareda@gmail.com',
            'password' => 'mybook',
            'job' => 'Mobile Programmer',
            'phone_number' => '085155060284',
            'birthday' => '17 January 2001',
            'address' => 'Blitar, East Java, Indonesia'
        ]);
    }
}
