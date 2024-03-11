<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GutenbergSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gutenbergs = [
            [
                'inhoud' => 'Dit is de nieuwe inhoud van de nieuwe titel!!',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('gutenberg')->insert($gutenbergs);
    }
}
