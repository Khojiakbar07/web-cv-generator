<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'id' => 1,
            'user_id' => 2,
            'first_name' => 'Kamoliddin',
            'last_name' => 'Umarov',
            'full_name' => "Umarov Kamoliddin Faxriddin o'g'li",
            'birthday' => '2001-03-23',
            'photo' => null,
            'country_id' => 1,
            'city_id' => 1,
            'address' => "Toshkent shahri, Yunusobod tumani, Ot chopar ko'chasi",
            'post_code' => 100025,
            'tags' => 'web, developer, php, laravel, vue, symfony, mysql',
            'native_language' => 'uz',
            'web_site' => 'softic.uz',
            'web_site_url' => 'https://softic.uz',
            'web_portfolio' => 'softic.uz',
            'web_portfolio_url' => 'https://softic.uz',
            'contact_number' => '+998 95 000 04 09',
            'contact_email' => 'softuzb@gmail.com',
            'social_telegram' => 'uzsoftic',
            'social_instagram' => 'uzsoftic',
            'social_linkedin' => 'uzsoftic',
            'social_github' => 'uzsoftic',
            'show_age' => true,
            'show_image' => true,
            'show_social' => true,
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('profiles')->insert([
            'id' => 2,
            'user_id' => 2,
            'first_name' => 'Azizbek',
            'last_name' => 'Azizov',
            'full_name' => "Azizov Azizbek Aziz o'g'li",
            'birthday' => '2002-02-02',
            'photo' => null,
            'country_id' => 1,
            'city_id' => 1,
            'address' => "Toshkent shahri, Yunusobod tumani, Chinobod ko'chasi",
            'post_code' => 100025,
            'tags' => 'web, developer, php, laravel, vue, symfony, mysql',
            'native_language' => 'uz',
            'web_site' => 'softic.uz',
            'web_site_url' => 'https://softic.uz',
            'web_portfolio' => 'softic.uz',
            'web_portfolio_url' => 'https://softic.uz',
            'contact_number' => '+998 95 000 04 09',
            'contact_email' => 'softuzb@gmail.com',
            'social_telegram' => 'uzsoftic',
            'social_instagram' => 'uzsoftic',
            'social_linkedin' => 'uzsoftic',
            'social_github' => 'uzsoftic',
            'show_age' => true,
            'show_image' => true,
            'show_social' => true,
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
