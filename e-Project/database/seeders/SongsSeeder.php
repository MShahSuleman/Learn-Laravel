<?php
namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongsSeeder extends Seeder
{
    public function run()
    {
        Song::create([
            'title' => 'Lajawab',
            'artist' => 'Rafey Anwer',
            'duration' => '4:00',
            'year' => '2023',
            'image_path' => '/images/lajawab 2.jpg',  // Update image path
            'video_path' => '/videos/index-songs/Lajawab/Lajawab-video.mp4', // Update video path
        ]);

        Song::create([
            'title' => 'Millionare',
            'artist' => 'Honey Singh',
            'duration' => '2:00',
            'year' => '2023',
            'image_path' => '/images/millionare.jpg',  // Update image path
            'video_path' => '/videos/index-songs/Millionare/Millionare.mp4', // Update video path
        ]);

        // Add more songs as needed...
    }
}
