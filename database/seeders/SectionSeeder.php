<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->insert([
                [
                    'name' => 'hero',
                    'description' => 'Hero',
                    'status' => 1,
                    'sort' => 1
                ],
                [
                    'name' => 'about',
                    'description' => 'About',
                    'status' => 1,
                    'sort' => 2
                ],
                [
                    'name' => 'resume',
                    'description' => 'Resume',
                    'status' => 1,
                    'sort' => 3
                ],
                [
                    'name' => 'services',
                    'description' => 'Services',
                    'status' => 1,
                    'sort' => 4
                ],
                [
                    'name' => 'skills',
                    'description' => 'Skills',
                    'status' => 1,
                    'sort' => 5
                ],
                [
                    'name' => 'projects',
                    'description' => 'Projects',
                    'status' => 1,
                    'sort' => 6
                ],
                [
                    'name' => 'blog',
                    'description' => 'Blog',
                    'status' => 1,
                    'sort' => 7
                ],
                [
                    'name' => 'counter',
                    'description' => 'Counter',
                    'status' => 1,
                    'sort' => 8
                ],
                [
                    'name' => 'hireme',
                    'description' => 'Hireme',
                    'status' => 1,
                    'sort' => 9
                ],
                [
                    'name' => 'contact',
                    'description' => 'Contact',
                    'status' => 1,
                    'sort' => 10
                ]
            ]
        );
    }
}
