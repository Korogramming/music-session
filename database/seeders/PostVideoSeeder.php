<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//facade...ファサード
use DateTime; //created_at用

class PostVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_videos')->insert([
            'user_id' => 1,
            'title' => 'ギター弾いてみた',
            'description' => 'コメント評価お願いします。',
            'created_at' => new DateTime(),
            'category_id' => 1,
        ]);
    }
}
