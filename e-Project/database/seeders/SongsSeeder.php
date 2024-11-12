<?php
namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongsSeeder extends Seeder
{
    public function run()
    {
        Song::create([
            'title' => 'Open Letter',
            'artist' => 'Talha Anjum',
            'duration' => '3:15',
            'year' => '2024',
            'image_path' => 'src/open_letter.jpg',
            'video_path' => 'src/index-songs/Open_letter/Open-letter-video.mp4',
            'description' => 'This is a description for Open Letter.'
        ]);

        Song::create([
            'title' => 'Lajawab',
            'artist' => 'Rafey Anwer',
            'duration' => '4:00',
            'year' => '2023',
            'image_path' => 'src/lajawab.jpg',
            'video_path' => 'src/index-songs/Lajawab/Lajawab-video.mp4',
            'description' => 'This is a description for Lajawab.',
        ]);

        // Add more songs as needed...
    }
}