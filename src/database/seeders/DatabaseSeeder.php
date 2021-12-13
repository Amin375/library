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

        User::create([
            'role_id' => 2,
            'name' => 'Joost M.',
            'email' => 'joost@test.com',
            'password' => Hash::make('joost123'),
            'street' => 'Maisstraat',
            'house_number' => 9,
            'postal_code' => '5234 BE',
            'city' => 'Amsterdam',
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
            'title' => 'Harry Potter and the Half-Blood Prince',
            'blurb' => 'Cornelis Droebel brengt een bezoek aan de Britse Dreuzelpremier. Het blijkt dat Droebel als Minister van
            Toverkunst werd opgevolgd door Rufus Schobbejak, de voormalige nummer één op het schouwershoofdkwatier. Droebel fungeert
            nog wel als woordvoerder en hij bespreekt met de Dreuzelpremier de rampspoed die de Dreuzelwereld de voorgaande weken is overkomen.
            Het blijkt dat een aantal Dooddoeners (volgelingen van de herrezen Voldemort) verantwoordelijk is voor rampen als wervelstormen, plotseling
            instortende bruggen en diverse onverklaarbare moorden, en dus niet de regering, zoals de tegenstander van de dreuzelpremier had gezegd.
            De premier was zeer verontwaardigd door de bericht - hij kon namelijk niet vertellen dat de dooddoeners verantwoordelijk waren voor de rampen,
            omdat niemand hem zou geloven. Het weten dat het niet zijn fout was maar het niet kunnen vertellen was voor hem veel
            erger dan dat als het wel echt zijn fout was. De Dooddoeners zijn dus weer volop actief, zowel in de Dreuzelwereld als in de tovenaarswereld.
            Severus Sneep, toverdrankleraar van Zweinstein en (mogelijk) dubbelspion,
            legt een Onbreekbare Eed af aan Narcissa Malfidus, waarin hij belooft dat hij haar zoon,
            Draco Malfidus, zal helpen bij het uitvoeren van de op dat moment voor de lezer nog onbekende
            taak waarmee Voldemort hem heeft belast.',
            'image' => 'images/Jv1OdQgSRWIKRVZB7ceX4GHuOCg95vvezCEu5GCm.jpg',
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

        BookCopy::factory(10)->create([
            'book_id' => 7,
        ]);

        BookCopy::factory(10)->create([
            'book_id' => 6,
        ]);

        BookCopy::factory(10)->create([
            'book_id' => 5,
        ]);

        BookCopy::factory(10)->create([
            'book_id' => 4,
        ]);

        BookCopy::factory(10)->create([
            'book_id' => 3,
        ]);

        BookCopy::factory(10)->create([
            'book_id' => 2,
        ]);

        BookCopy::factory(10)->create([
            'book_id' => 1,
        ]);


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
