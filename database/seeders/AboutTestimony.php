<?php

namespace Database\Seeders;

use App\Models\Testimony;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutTestimony extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimony::create([
            'name' => 'mark',
            'feedback' => 'good service and top talent'
        ]);
    }
}
