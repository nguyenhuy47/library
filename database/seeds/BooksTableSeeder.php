<?php

use Illuminate\Database\Seeder;
use App\Model\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class)->create();
    }
}
