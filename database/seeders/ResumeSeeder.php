<?php

namespace Database\Seeders;

use App\Models\Resume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resumes')->insert([
            'id' => 1,
            'user_id' => 2,
            'profile_id' => 1,
            'template_id' => 1,
            'deleted' => false,
            'created_at' => now()->subMinutes(15),
            'updated_at' => now()->subMinutes(15)
        ]);
        Resume::insert([
            'id' => 2,
            'user_id' => 2,
            'profile_id' => 2,
            'template_id' => 2,
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
