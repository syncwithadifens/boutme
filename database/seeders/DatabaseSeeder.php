<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\About;
use Illuminate\Database\Seeder;
use Database\Seeders\AboutService;
use Database\Seeders\AboutTestimony;
use Database\Seeders\AboutCertificate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            About::class,
            AboutService::class,
            AboutTestimony::class,
            AboutTechStack::class,
            CategorySeeder::class,
            ProjectSeeder::class,
            CertificateSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            SkillSeeder::class
        ]);
    }
}
