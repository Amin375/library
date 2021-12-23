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

        Book::create([
            'author_id' => 6,
            'genre_id' => 4,
            'title' => 'Alice in Wonderland',
            'blurb' => 'The Hunting of the Snark, subtitled An Agony in 8 Fits, is a poem by the English writer Lewis Carroll.
            It is typically categorised as a nonsense poem. Written between 1874 and 1876, it borrows the setting, some creatures,
            and eight portmanteau words from Carroll\'s earlier poem "Jabberwocky" in his children\'s novel Through the Looking-Glass (1871).
            The narrative follows a crew of ten trying to hunt the Snark, a creature which may turn out to be a highly dangerous Boojum.
            The only crewmember to find the Snark quietly vanishes, leading the narrator to explain that the Snark was a Boojum after all.
            The poem is dedicated to young Gertrude Chataway, whom Carroll met at the English seaside town Sandown in the Isle of Wight in 1875.
            Included with many copies of the first edition of the poem was Carroll\'s religious tract, An Easter Greeting to Every Child Who Loves "Alice".',
            'image' => 'images/jMmk35PPt6If3PJvIDUm7sNwCOFaoUj7loQoIWk7.jpg',
        ]);

        Book::create([
            'author_id' => 6,
            'genre_id' => 4,
            'title' => 'The Nursery "Alice"',
            'blurb' => 'The Hunting of the Snark, subtitled An Agony in 8 Fits, is a poem by the English writer Lewis Carroll.
            It is typically categorised as a nonsense poem. Written between 1874 and 1876, it borrows the setting, some creatures,
            and eight portmanteau words from Carroll\'s earlier poem "Jabberwocky" in his children\'s novel Through the Looking-Glass (1871).
            The narrative follows a crew of ten trying to hunt the Snark, a creature which may turn out to be a highly dangerous Boojum.
            The only crewmember to find the Snark quietly vanishes, leading the narrator to explain that the Snark was a Boojum after all.
            The poem is dedicated to young Gertrude Chataway, whom Carroll met at the English seaside town Sandown in the Isle of Wight in 1875.
            Included with many copies of the first edition of the poem was Carroll\'s religious tract, An Easter Greeting to Every Child Who Loves "Alice".',
            'image' => 'images/EKfKUimsxjFMBdlGkS1moBbDAXKMlsuSVQnpDdSK.jpg',
        ]);

        Book::create([
            'author_id' => 6,
            'genre_id' => 4,
            'title' => 'Sylvie and Bruno',
            'blurb' => 'The Hunting of the Snark, subtitled An Agony in 8 Fits, is a poem by the English writer Lewis Carroll.
            It is typically categorised as a nonsense poem. Written between 1874 and 1876, it borrows the setting, some creatures,
            and eight portmanteau words from Carroll\'s earlier poem "Jabberwocky" in his children\'s novel Through the Looking-Glass (1871).
            The narrative follows a crew of ten trying to hunt the Snark, a creature which may turn out to be a highly dangerous Boojum.
            The only crewmember to find the Snark quietly vanishes, leading the narrator to explain that the Snark was a Boojum after all.
            The poem is dedicated to young Gertrude Chataway, whom Carroll met at the English seaside town Sandown in the Isle of Wight in 1875.
            Included with many copies of the first edition of the poem was Carroll\'s religious tract, An Easter Greeting to Every Child Who Loves "Alice".',
            'image' => 'images/X3R6jIYpUnW6eK8vN5RwBytABsTOlwoOECePE0CG.jpg',
        ]);

        Book::create([
            'author_id' => 6,
            'genre_id' => 7,
            'title' => 'Through the Looking-Glass',
            'blurb' => 'The Hunting of the Snark, subtitled An Agony in 8 Fits, is a poem by the English writer Lewis Carroll.
            It is typically categorised as a nonsense poem. Written between 1874 and 1876, it borrows the setting, some creatures,
            and eight portmanteau words from Carroll\'s earlier poem "Jabberwocky" in his children\'s novel Through the Looking-Glass (1871).
            The narrative follows a crew of ten trying to hunt the Snark, a creature which may turn out to be a highly dangerous Boojum.
            The only crewmember to find the Snark quietly vanishes, leading the narrator to explain that the Snark was a Boojum after all.
            The poem is dedicated to young Gertrude Chataway, whom Carroll met at the English seaside town Sandown in the Isle of Wight in 1875.
            Included with many copies of the first edition of the poem was Carroll\'s religious tract, An Easter Greeting to Every Child Who Loves "Alice".',
            'image' => 'images/rMb32XLB9WOwLRhZGBT7OflISqrzJUwr8eQHCFgM.jpg',
        ]);

        Book::create([
            'author_id' => 6,
            'genre_id' => 7,
            'title' => 'The Walrus and the Carpenter',
            'blurb' => 'The Hunting of the Snark, subtitled An Agony in 8 Fits, is a poem by the English writer Lewis Carroll.
            It is typically categorised as a nonsense poem. Written between 1874 and 1876, it borrows the setting, some creatures,
            and eight portmanteau words from Carroll\'s earlier poem "Jabberwocky" in his children\'s novel Through the Looking-Glass (1871).
            The narrative follows a crew of ten trying to hunt the Snark, a creature which may turn out to be a highly dangerous Boojum.
            The only crewmember to find the Snark quietly vanishes, leading the narrator to explain that the Snark was a Boojum after all.
            The poem is dedicated to young Gertrude Chataway, whom Carroll met at the English seaside town Sandown in the Isle of Wight in 1875.
            Included with many copies of the first edition of the poem was Carroll\'s religious tract, An Easter Greeting to Every Child Who Loves "Alice".',
            'image' => 'images/kVmJEYjrdw9lKABgVE493Pt45al411IyUuTU6bR3.jpg',
        ]);

        Book::create([
            'author_id' => 7,
            'genre_id' => 6,
            'title' => 'The Adventures of Tom Sawyer',
            'blurb' => 'The Hunting of the Snark, subtitled An Agony in 8 Fits, is a poem by the English writer Lewis Carroll.
            It is typically categorised as a nonsense poem. Written between 1874 and 1876, it borrows the setting, some creatures,
            and eight portmanteau words from Carroll\'s earlier poem "Jabberwocky" in his children\'s novel Through the Looking-Glass (1871).
            The narrative follows a crew of ten trying to hunt the Snark, a creature which may turn out to be a highly dangerous Boojum.
            The only crewmember to find the Snark quietly vanishes, leading the narrator to explain that the Snark was a Boojum after all.
            The poem is dedicated to young Gertrude Chataway, whom Carroll met at the English seaside town Sandown in the Isle of Wight in 1875.
            Included with many copies of the first edition of the poem was Carroll\'s religious tract, An Easter Greeting to Every Child Who Loves "Alice".',
            'image' => 'images/o9TOeY1QI0JHyadqf3DqbTKeRvdHmBfloKvgQUPO.jpg',
        ]);

        Book::create([
            'author_id' => 7,
            'genre_id' => 6,
            'title' => 'The Adventures of Huckleberry Finn',
            'blurb' => 'The Hunting of the Snark, subtitled An Agony in 8 Fits, is a poem by the English writer Lewis Carroll.
            It is typically categorised as a nonsense poem. Written between 1874 and 1876, it borrows the setting, some creatures,
            and eight portmanteau words from Carroll\'s earlier poem "Jabberwocky" in his children\'s novel Through the Looking-Glass (1871).
            The narrative follows a crew of ten trying to hunt the Snark, a creature which may turn out to be a highly dangerous Boojum.
            The only crewmember to find the Snark quietly vanishes, leading the narrator to explain that the Snark was a Boojum after all.
            The poem is dedicated to young Gertrude Chataway, whom Carroll met at the English seaside town Sandown in the Isle of Wight in 1875.
            Included with many copies of the first edition of the poem was Carroll\'s religious tract, An Easter Greeting to Every Child Who Loves "Alice".',
            'image' => 'images/vW6yNtqTmB1KnBadSh7IQL82daBJCwahNSc43sY9.jpg',
        ]);

        Book::create([
            'author_id' => 7,
            'genre_id' => 10,
            'title' => 'A Connecticut Yankee in King Arthur\'s Court',
            'blurb' => 'The Hunting of the Snark, subtitled An Agony in 8 Fits, is a poem by the English writer Lewis Carroll.
            It is typically categorised as a nonsense poem. Written between 1874 and 1876, it borrows the setting, some creatures,
            and eight portmanteau words from Carroll\'s earlier poem "Jabberwocky" in his children\'s novel Through the Looking-Glass (1871).
            The narrative follows a crew of ten trying to hunt the Snark, a creature which may turn out to be a highly dangerous Boojum.
            The only crewmember to find the Snark quietly vanishes, leading the narrator to explain that the Snark was a Boojum after all.
            The poem is dedicated to young Gertrude Chataway, whom Carroll met at the English seaside town Sandown in the Isle of Wight in 1875.
            Included with many copies of the first edition of the poem was Carroll\'s religious tract, An Easter Greeting to Every Child Who Loves "Alice".',
            'image' => 'images/Y6UHiMgg6VxYC5rUOp5uT7jpNNKPW2z0NK4N5viU.jpg',
        ]);

        Book::create([
            'author_id' => 2,
            'genre_id' => 11,
            'title' => 'Oliver Twist',
            'blurb' => 'A gripping portrayal of London\'s dark criminal underbelly, published in Penguin Classics with an introduction by Philip Horne.
            The story of Oliver Twist - orphaned, and set upon by evil and adversity from his first breath - shocked readers when it was published.
            After running away from the workhouse and pompous beadle Mr Bumble, Oliver finds himself lured into a den of thieves peopled by vivid and
            memorable characters - the Artful Dodger, vicious burglar Bill Sikes, his dog Bull\'s Eye, and prostitute Nancy, all watched over by cunning
            master-thief Fagin. Combining elements of Gothic Romance, the Newgate Novel and popular melodrama, Dickens created an entirely new kind of fiction,
            scathing in its indictment of a cruel society, and pervaded by an unforgettable sense of threat and mystery.',
            'image' => 'images/i084xxJlT9rdLJWvFu0QF7yy74JkmIPo1N6q7S8h.jpg',
        ]);

        Book::create([
            'author_id' => 9,
            'genre_id' => 4,
            'title' => 'Pride and Prejudice',
            'blurb' => 'Pride and Prejudice is an 1813 novel of manners written by Jane Austen.
            Though it is mostly called a romantic novel, it is also a satire.This is not an exhaustive
            list (that list would be hundreds of editions long because wow do people love their Pride and Prejudice),
            but it is a round up of some of the editions I found most lovely or interesting. So enjoy—and try not to buy them all!',
            'image' => 'images/nP4Yhs8qBUDCuu5wuiI3zNYkKNvm6C8xy7RdAWyc.jpg',
        ]);

        Book::create([
            'author_id' => 2,
            'genre_id' => 11,
            'title' => 'David Copperfield',
            'blurb' => 'The Personal History, Adventures, Experience and Observation of David Copperfield the Younger
            of Blunderstone Rookery (Which He Never Meant to Publish on Any Account), commonly known as David Copperfield,
             is a novel in the bildungsroman genre by Charles Dickens, narrated by the eponymous David Copperfield,
             detailing his adventures in his journey from infancy to maturity. It was first published as a serial in 1849 and 1850,
             and as a book in 1850. David Copperfield is also an autobiographical novel: "a very complicated weaving of truth and invention",
             with events following Dickens\'s own life. Of the books he wrote, it was his favourite. Called "the triumph of the art of Dickens",
             it marks a turning point in his work, separating the novels of youth and those of maturity.
            At first glance, the work is modelled on 18th-century "personal histories" that were very popular, like Henry Fielding\'s J
            oseph Andrews or Tom Jones, but David Copperfield is a more carefully structured work. It begins, like other novels by Dickens,
            with a bleak picture of childhood in Victorian England, followed by young Copperfield\'s slow social ascent, as he painfully provides
            for his aunt, while continuing his studies.
            Dickens wrote without an outline, unlike his previous novel,
            Dombey and Son. Some aspects of the story were fixed in his mind from the start, but others were undecided until the serial publications were underway. The novel has a primary theme of growth and change, but Dickens also satirises many aspects of Victorian life. These include the plight of prostitutes, the status of women in marriage, class structure, the criminal justice system, the quality of schools and the employment of children in factories.',
            'image' => 'images/r7LvmaQ190petxmuqhtYFcVmmn6ni02tV1XdTaUR.jpg',
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

        BookCopy::factory(10)->create([
            'book_id' => 8,
        ]);

        BookCopy::factory(10)->create([
            'book_id' => 9,
        ]);

        BookCopy::factory(5)->create([
            'book_id' => 10,
        ]);

        BookCopy::factory(5)->create([
            'book_id' => 11,
        ]);

        BookCopy::factory(5)->create([
            'book_id' => 12,
        ]);

        BookCopy::factory(5)->create([
            'book_id' => 13,
        ]);

        BookCopy::factory(5)->create([
            'book_id' => 14,
        ]);

        BookCopy::factory(0)->create([
            'book_id' => 15,
        ]);

        BookCopy::factory(0)->create([
            'book_id' => 16,
        ]);

        BookCopy::factory(0)->create([
            'book_id' => 17,
        ]);

        BookCopy::factory(5)->create([
            'book_id' => 18,
        ]);

        BookCopy::factory(5)->create([
            'book_id' => 19,
        ]);

        BookCopy::factory(5)->create([
            'book_id' => 20,
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

        Genre::create([
            'title' => 'Novel'
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
