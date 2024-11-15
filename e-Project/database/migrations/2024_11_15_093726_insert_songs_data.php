<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertSongsData extends Migration
{
    public function up()
    {
        DB::table('songs')->insert([
            [
                'title' => 'Lajawab',
                'artist' => 'Rafey Anwer',
                'duration' => '4:00',
                'year' => '2023',
                'image_path' => '/images/lajawab 2.jpg',
                'video_path' => '/videos/index-songs/Lajawab/Lajawab-2.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Millionare',
                'artist' => 'Honety Singh',
                'duration' => '2:00',
                'year' => '2023',
                'image_path' => '/images/millionare.jpg',
                'video_path' => '/videos/index-songs/Millionare/Millionare.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more songs as needed...
        ]);
    }

    public function down()
    {
        // Optionally, you can remove the inserted records in the down method
        DB::table('songs')->where('title', 'Lajawab')->delete();
        DB::table('songs')->where('title', 'Millionare')->delete();
        // Add more delete statements if necessary
    }
}