<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('templates')->insert([
            'id' => 1,
            'title' => 'Free template',
            'image' => null,
            'style' => 'free.css',
            'pro' => false,
            'status' => true,
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('templates')->insert([
            'id' => 2,
            'title' => 'Pro template',
            'image' => null,
            'style' => 'pro.css',
            'pro' => true,
            'status' => true,
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
