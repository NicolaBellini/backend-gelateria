<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Database\Seeders\ProjectsSeeder;
use Database\Seeders\flavoursTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([

            // flavoursTableSeeder::class
            // TypesTableSeeder::class,
            iceCreamsTabelSeeder::class,

        ]);
    }
}
