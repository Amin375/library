<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookCopy;
use App\Models\Genre;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::create([
            'role_id' => 1,
            'name' => 'Pablo J.',
            'email' => 'pablo@test.com',
            'password' => Hash::make('pablo123'),
            'street' => 'Kanaalstraat',
            'house_number' => 3,
            'postal_code' => '5986 BE',
            'city' => 'Beringe',
            'country' => 'Nederland',
            'phone' => '0639173377'
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Maria J.',
            'email' => 'maria@test.com',
            'password' => Hash::make('maria123'),
            'street' => 'Kanaalstraat',
            'house_number' => 5,
            'postal_code' => '5986 BE',
            'city' => 'Beringe',
            'country' => 'Nederland',
            'phone' => '0639173377'
        ]);

        Book::create([
            'author_id' => 1,
            'genre_id' => 4,
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'blurb' => 'I\'m baby xOXO cray health goth blog chia portland forage air plant craft beer .
                        Fingerstache disrupt 8 - bit kinfolk, enamel pin lomo pickled bicycle rights you probably haven\'t
                        heard of them iceland pinterest drinking vinegar sartorial direct trade chia. Unicorn irony freegan,
                        etsy master cleanse you probably haven\'t heard of them williamsburg vinyl PBR & B health goth pork belly
                        food truck small batch biodiesel . Kickstarter salvia tilde kogi . Tote bag flexitarian chartreuse,
                        PBR & B VHS art party skateboard taiyaki beard keffiyeh letterpress food truck direct trade quinoa . ',
            'image' => 'images/HQzJh6iYABAdt9XLEd1aWQwviRj7NDHH7DHE0J5V.jpg',
        ]);

        Book::create([
            'author_id' => 1,
            'genre_id' => 4,
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'blurb' => 'I\'m baby xOXO cray health goth blog chia portland forage air plant craft beer .
                        Fingerstache disrupt 8 - bit kinfolk, enamel pin lomo pickled bicycle rights you probably haven\'t
                        heard of them iceland pinterest drinking vinegar sartorial direct trade chia. Unicorn irony freegan,
                        etsy master cleanse you probably haven\'t heard of them williamsburg vinyl PBR & B health goth pork belly
                        food truck small batch biodiesel . Kickstarter salvia tilde kogi . Tote bag flexitarian chartreuse,
                        PBR & B VHS art party skateboard taiyaki beard keffiyeh letterpress food truck direct trade quinoa . ',
            'image' => 'images/HQzJh6iYABAdt9XLEd1aWQwviRj7NDHH7DHE0J5V.jpg',
        ]);

        Book::create([
            'author_id' => 1,
            'genre_id' => 4,
            'title' => 'Harry Potter and the Chamber of Secrets',
            'blurb' => 'I\'m baby xOXO cray health goth blog chia portland forage air plant craft beer .
                        Fingerstache disrupt 8 - bit kinfolk, enamel pin lomo pickled bicycle rights you probably haven\'t
                        heard of them iceland pinterest drinking vinegar sartorial direct trade chia. Unicorn irony freegan,
                        etsy master cleanse you probably haven\'t heard of them williamsburg vinyl PBR & B health goth pork belly
                        food truck small batch biodiesel . Kickstarter salvia tilde kogi . Tote bag flexitarian chartreuse,
                        PBR & B VHS art party skateboard taiyaki beard keffiyeh letterpress food truck direct trade quinoa . ',
            'image' => 'images/8Ze0c0cxuApGFEgHi5lclOid7LYO9ewiNH2Qj8Tj.jpg',
        ]);

        Book::create([
            'author_id' => 1,
            'genre_id' => 4,
            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'blurb' => 'I\'m baby xOXO cray health goth blog chia portland forage air plant craft beer .
                        Fingerstache disrupt 8 - bit kinfolk, enamel pin lomo pickled bicycle rights you probably haven\'t
                        heard of them iceland pinterest drinking vinegar sartorial direct trade chia. Unicorn irony freegan,
                        etsy master cleanse you probably haven\'t heard of them williamsburg vinyl PBR & B health goth pork belly
                        food truck small batch biodiesel . Kickstarter salvia tilde kogi . Tote bag flexitarian chartreuse,
                        PBR & B VHS art party skateboard taiyaki beard keffiyeh letterpress food truck direct trade quinoa . ',
            'image' => 'images/5ujtNCrvlVbTT5Cuvw1PBt5HssAfisSniVn7OKN9.jpg',
        ]);

        Book::create([
            'author_id' => 1,
            'genre_id' => 4,
            'title' => 'Harry Potter and the Goblet of Fire',
            'blurb' => 'I\'m baby xOXO cray health goth blog chia portland forage air plant craft beer .
                        Fingerstache disrupt 8 - bit kinfolk, enamel pin lomo pickled bicycle rights you probably haven\'t
                        heard of them iceland pinterest drinking vinegar sartorial direct trade chia. Unicorn irony freegan,
                        etsy master cleanse you probably haven\'t heard of them williamsburg vinyl PBR & B health goth pork belly
                        food truck small batch biodiesel . Kickstarter salvia tilde kogi . Tote bag flexitarian chartreuse,
                        PBR & B VHS art party skateboard taiyaki beard keffiyeh letterpress food truck direct trade quinoa. ',
            'image' => 'images/u4Szf3dVqImM7U1sQ0UKdWYxeeDt3GyP1T4pFemj.jpg',
        ]);

        Book::create([
            'author_id' => 1,
            'genre_id' => 4,
            'title' => 'Harry Potter and the Order of the Phoenix',
            'blurb' => 'I\'m baby xOXO cray health goth blog chia portland forage air plant craft beer .
                        Fingerstache disrupt 8 - bit kinfolk, enamel pin lomo pickled bicycle rights you probably haven\'t
                        heard of them iceland pinterest drinking vinegar sartorial direct trade chia. Unicorn irony freegan,
                        etsy master cleanse you probably haven\'t heard of them williamsburg vinyl PBR & B health goth pork belly
                        food truck small batch biodiesel . Kickstarter salvia tilde kogi . Tote bag flexitarian chartreuse,
                        PBR & B VHS art party skateboard taiyaki beard keffiyeh letterpress food truck direct trade quinoa . ',
            'image' => 'images/AUvspWgAqKDzWmnrqLY0y2Nne7IQFtcdAOMGGD6G.jpg',
        ]);

        Book::create([
            'author_id' => 1,
            'genre_id' => 4,
            'title' => 'Harry Potter and the Deathly Hallows',
            'blurb' => 'I\'m baby xOXO cray health goth blog chia portland forage air plant craft beer .
                        Fingerstache disrupt 8 - bit kinfolk, enamel pin lomo pickled bicycle rights you probably haven\'t
                        heard of them iceland pinterest drinking vinegar sartorial direct trade chia. Unicorn irony freegan,
                        etsy master cleanse you probably haven\'t heard of them williamsburg vinyl PBR & B health goth pork belly
                        food truck small batch biodiesel . Kickstarter salvia tilde kogi . Tote bag flexitarian chartreuse,
                        PBR & B VHS art party skateboard taiyaki beard keffiyeh letterpress food truck direct trade quinoa . ',
            'image' => 'images/ZPGFu4KiOifZ1hRgatkly44FRstbsvqqTi7mu942.jpg',
        ]);

        BookCopy::factory(10)->create();


        Genre::create([
            'title' => 'Sci - Fi'
        ]);

        Genre::create([
            'title' => 'Romance'
        ]);

        Genre::create([
            'title' => 'Thriller'
        ]);

        Genre::create([
            'title' => 'Fantasy'
        ]);

        Genre::create([
            'title' => 'Horror'
        ]);

        Genre::create([
            'title' => 'Comedy'
        ]);

        Genre::create([
            'title' => 'Mystery'
        ]);

        Genre::create([
            'title' => 'Adventure'
        ]);

        Genre::create([
            'title' => 'Cooking'
        ]);

        Genre::create([
            'title' => 'History'
        ]);

        Author::create([
            'name' => 'J. K. Rowling'
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
