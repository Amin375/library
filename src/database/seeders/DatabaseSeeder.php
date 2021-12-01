<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//      Genre::factory(10)->create();
//      Role::factory(1)->create();
        Role::create([
            'title' => 'admin'
        ]);

        Role::create([
            'title' => 'member'
        ]);

//        Genre::create([
//           'title' => 'Sci-Fi'
//        ]);
//
//        Genre::create([
//           'title' => 'Romance'
//        ]);
//
//        Genre::create([
//           'title' => 'Thriller'
//        ]);
//
//        Genre::create([
//           'title' => 'Fantasy'
//        ]);
//
//        Genre::create([
//           'title' => 'Horror'
//        ]);
//
//        Genre::create([
//            'title' => 'Comedy'
//        ]);
//
//        Genre::create([
//            'title' => 'Mystery'
//        ]);
//
//        Genre::create([
//            'title' => 'Adventure'
//        ]);
//
//        Genre::create([
//            'title' => 'Cooking'
//        ]);
//
//        Genre::create([
//            'title' => 'History'
//        ]);
//
        Author::create([
           'name' => 'J.K. Rowling'
        ]);

        Author::create([
            'name' => 'Charles Dickens'
        ]);

        Author::create([
            'name' => 'Isaac Asimov'
        ]);

        Author::create([
            'name' => 'Denise Robins'
        ]);

        Author::create([
            'name' => 'Agatha Christie'
        ]);

        Author::create([
            'name' => 'Lewis Carroll'
        ]);

        Author::create([
            'name' => 'Mark Twain'
        ]);

        Author::create([
            'name' => 'Ernest Hemingway'
        ]);

        Author::create([
            'name' => 'Jane Austen'
        ]);

        Author::create([
            'name' => 'George Orwell'
        ]);
    }
}
