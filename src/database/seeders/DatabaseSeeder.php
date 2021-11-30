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
         Genre::factory(10)->create();
//            Role::factory()->create();
//        Role::create([
//            'title' => 'admin'
//        ]);
//
//        Role::create([
//            'title' => 'member'
//        ]);
    }
}
