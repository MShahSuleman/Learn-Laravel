<?php

namespace Database\Seeders;
use App\Models\Song;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            'title' => 'Lajawab',
            'artist' => 'Taimoor Baig',
            'genre' => 'Rock',
            'release_date' => '1975-10-31',
        ]);

        Song::create([
            'title' => 'Millionare',
            'artist' => 'Honey Singh',
            'genre' => 'Rock',
            'release_date' => '1971-11-08',
        ]);

    }
}
