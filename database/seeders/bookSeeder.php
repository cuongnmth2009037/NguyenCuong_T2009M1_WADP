<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();
        DB::table('books')->insert([
            [
                'bookid'=>'1',
                'authorid'=>'2',
                'title'=>'The Little Prince.',
                'ISBN'=>'IBN 123456787-1',
                'pub_year'=>'2007',
                'available'=>'1'
            ],
            [
                'bookid'=>'2',
                'authorid'=>'3',
                'title'=>'The Catcher In The Rye.',
                'ISBN'=>'IBN 343456787-2',
                'pub_year'=>'2008',
                'available'=>'1'
            ],
            [
                'bookid'=>'3',
                'authorid'=>'4',
                'title'=>'To Kill a Mockingbird.',
                'ISBN'=>'IBN 253456787-3',
                'pub_year'=>'2010',
                'available'=>'1'
            ],
            [
                'bookid'=>'4',
                'authorid'=>'5',
                'title'=>'Life Of Pi.',
                'ISBN'=>'IBN 356756787-4',
                'pub_year'=>'2011',
                'available'=>'1'
            ],
            [
                'bookid'=>'5',
                'authorid'=>'6',
                'title'=>'The Alchemist.',
                'ISBN'=>'IBN 356778987-5',
                'pub_year'=>'2012',
                'available'=>'1'
            ],
            [
                'bookid'=>'6',
                'authorid'=>'7',
                'title'=>'Me Before You.',
                'ISBN'=>'IBN 356565987-6',
                'pub_year'=>'2013',
                'available'=>'1'
            ],
            [
                'bookid'=>'7',
                'authorid'=>'8',
                'title'=>'Harry Potter.',
                'ISBN'=>'IBN 354545987-7',
                'pub_year'=>'2014',
                'available'=>'1'
            ],
            [
                'bookid'=>'8',
                'authorid'=>'9',
                'title'=>'Diary Of A Wimpy Kid.',
                'ISBN'=>'IBN 356768987-8',
                'pub_year'=>'2015',
                'available'=>'1'
            ],
        ]);
    }
}
