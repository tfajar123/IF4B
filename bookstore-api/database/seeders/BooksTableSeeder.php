<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [];
        $faker = Faker::create();
        $image_categories = ['abstract', 'animals', 'business', 'cats', 'food', 'nature', 'technics', 'transport'];
        for ($i=0;$i<25;$i++) {
            $title = $faker->sentence(mt_rand(3, 6));
            $title = str_replace('.', '', $title);
            $slug = str_replace(' ', '-', strtolower($title));
            $category = $image_categories[mt_rand(0, 7)];
            $cover_path = '/xampp/htdocs/bookstore-api/public/images/books';
            $cover_fullpath = $faker->image( $cover_path, 300, 500, $category, true, true, $category);
            $cover = str_replace($cover_path . '/' , '', $cover_fullpath);
            $books[$i] = [
                'title' => $title,
                'slug' => $slug,
                'description' => $faker->text(255),
                'author' => $faker->name,
                'publisher' => $faker->company,
                'cover' => $cover,
                'price' => mt_rand(1, 10) * 50000,
                'weight' => 0.5,
                'status' => 'PUBLISH',
                'created_at' => Carbon::now(),
            ];
        }
        DB::table('books')->insert($books);
    }
}
