<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
            TemplateSeeder::class,
            ProfileSeeder::class,
            ResumeSeeder::class
        ]);

        //\App\Models\User::factory(50)->create();

    }
}
