<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certificate::create([
            'name' => 'Multiplatform Developer',
            'course' => 'dicoding',
            'year' => '2019',
            'img' => 'blog-1.jpg'
        ]);
    }
}
