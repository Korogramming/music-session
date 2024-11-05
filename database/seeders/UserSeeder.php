<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//DB用の追記
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //insert…挿入する
        //一つ目のユーザー
        DB::table('users')->insert([
            'name' => '人間',
            'email' => 'test@test',
            //ハッシュ化することでパスワードはランダムな文字列へと変換され第三者が不正に利用して悪用することを防ぐ
            'password' => Hash::make('password'),
            'profile' => '音楽を聞くのが好きです。',
        ]);
        //二つ目のユーザー
        DB::table('users')->insert([
            'name' => '人間2',
            'email' => 'test2@test',
            'password' => Hash::make('password'),
            'profile' => '楽器を演奏するのが好きです。',
        ]);
    }
}
