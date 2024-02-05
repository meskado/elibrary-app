<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [];
        foreach(range(1,3) as $index){
            $book = [
                'book_title' => 'INTRODUCTION TO BIOLOGY',
                'isbn' => '22e19lokk3',
                'publish_year' => '30/01/2023',
                'cover_price' => '1000',
                'status' => 'in',
                'created_at' => now(),
                'updated_at' => now(),

            ];
        }
        $books[] = $book;
        DB::table('books')->insert($books);
    }
}
