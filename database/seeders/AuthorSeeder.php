<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'Jane Austen', 'date_of_birth' => '1775-12-16'],
            ['name' => 'Charles Dickens', 'date_of_birth' => '1812-02-07'],
            ['name' => 'J.R.R. Tolkien', 'date_of_birth' => '1892-01-03'],
            ['name' => 'Stephen King', 'date_of_birth' => '1947-09-21'],
            ['name' => 'Agatha Christie', 'date_of_birth' => '1890-09-15'],

        ];

        foreach ($authors as $author) {
            DB::table('authors')->insert([
                'name' => $author['name'],
                'date_of_birth' => $author['date_of_birth'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
