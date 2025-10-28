<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Entity;
use App\Models\Reviewer;
use App\Models\Tag;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'safallwa@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(10)->create();
        Category::factory(10)->create();
        Entity::factory(10)->create();
        Reviewer::factory(10)->create();
        Tag::factory(10)->create();
        Review::factory(10)->create();
    }
}
