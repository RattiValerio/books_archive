<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authorIds = DB::table('authors')->pluck('id')->toArray();
        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        $books = [
            ['title' => 'Pride and Prejudice', 'description' => Str::random(100), 'pages' => 432],
            ['title' => 'The Lord of the Rings', 'description' => Str::random(100), 'pages' => 1216],
            ['title' => 'The Shining', 'description' => Str::random(100), 'pages' => 447],
            ['title' => 'And Then There Were None', 'description' => Str::random(100), 'pages' => 272]
        ];

        foreach ($books as $book) {
            $authorId = $authorIds[array_rand($authorIds)];
            $categoryId = $categoryIds[array_rand($categoryIds)];


            DB::table('books')->insert([
                'title' => $book['title'],
                'description' => $book['description'],
                'pages' => $book['pages'],
                'author_id' => $authorId,
                'category_id' => $categoryId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
