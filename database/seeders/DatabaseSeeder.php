<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            ImageSeeder::class,
            StorySeeder::class,
            PageSeeder::class,
            TextSeeder::class,
            AudioSeeder::class,
            InteractionSeeder::class,
            PositionSeeder::class,
            TextConfigSeeder::class,
            IconSeeder::class
        ]);
    }
}
