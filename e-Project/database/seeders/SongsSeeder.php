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
            'image_path' => 'src/open letter.jpg',
            'video_path' => 'src/index-songs/Open letter/Open-letter-video.mp4',
            'artist_id' => 'talha_anjum'
        ]);

        // Add more songs...
    }
}