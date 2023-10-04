<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\TechStack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutTechStack extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TechStack::create([
            'name' => 'test'
        ]);
    }
}
