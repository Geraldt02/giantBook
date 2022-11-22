<?php

namespace Database\Seeders;

use App\Models\Book_category;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book_category::create([
            'book_id' => 1,
            'category_id' => 1
        ]);

        Book_category::create([
            'book_id' => 2,
            'category_id' => 1
        ]);

        Book_category::create([
            'book_id' => 2,
            'category_id' => 2
        ]);

        Book_category::create([
            'book_id' => 3,
            'category_id' => 3
        ]);

        Book_category::create([
            'book_id' => 4,
            'category_id' => 3
        ]);

        Book_category::create([
            'book_id' => 5,
            'category_id' => 1
        ]);

        Book_category::create([
            'book_id' => 5,
            'category_id' => 3
        ]);

        Book_category::create([
            'book_id' => 5,
            'category_id' => 4
        ]);

        Book_category::create([
            'book_id' => 6,
            'category_id' => 2
        ]);


    }
}
