<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            'Fiction', 'Non-Fiction', 'Science Fiction', 'Fantasy', 'Mystery', 'Thriller',
            'Romance', 'Historical Fiction', 'Horror', 'Biography', 'Autobiography', 'Cookbook',
            'Self-Help', 'Business', 'Science', 'History', 'Travel', 'Art', 'Poetry',
            'Drama', 'Comedy', 'Young Adult', "Children's Literature", 'Textbook', 'Graphic Novel',
            'Religion/Spirituality'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
