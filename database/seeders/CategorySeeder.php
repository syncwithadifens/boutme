<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectCategory::create([
            'name' => 'UI/UX',
        ]);
        ProjectCategory::create([
            'name' => 'Web Development',
        ]);
        ProjectCategory::create([
            'name' => 'Mobile Development',
        ]);
    }
}
