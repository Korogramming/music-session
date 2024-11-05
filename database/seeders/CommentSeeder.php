<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime; //created_at用

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'post_video_id' => 1,
            'body' => 'いい音ですね！',
            'user_id' => 2,
            'created_at' => new DateTime(),
        ]);
    }
}
