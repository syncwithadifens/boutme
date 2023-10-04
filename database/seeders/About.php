<?php

namespace Database\Seeders;

use App\Models\About as ModelsAbout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class About extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsAbout::create([
            'description' => "I'm Flutter Developer and UI/UX Designer from Sydney, Australia, working in web development and print media. I enjoy turning complex problems into simple, beautiful and intuitive designs. \n\n
            My job is to build your website so that it is functional and user-friendly but at the same time attractive. Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring across your message and identity in the most creative way. I created web design for many famous brand companies."
        ]);
    }
}
