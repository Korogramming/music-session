<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('likes', function (Blueprint $table) {
            $table->foreignId('post_video_id')->constrained()->onDelete('cascade');
            //上記のように記述することでonDelete('cascade')によって削除時のcascadeを設定出来る
            //cascadeとはリレーションに対して親テーブルの操作を子テーブルにも反映させることを指す
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('likes', function (Blueprint $table) {
            //
        });
    }
};
