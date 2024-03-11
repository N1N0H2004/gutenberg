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
            [   'titel' => 'Dit is de nieuwe titel!',
                'inhoud' => 'Dit is de nieuwe inhoud van de nieuwe titel!!',
                'slug' => 'over-ons',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('gutenberg')->insert($gutenbergs);
    }
}
