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
        Schema::table('post_videos', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained();
            //'user_id'は'userテーブル'の'id'を参照する外部キー
            //$table->foreignId('category_id')->constrained()->onDelete('cascade');をすると
            //親テーブルの操作を子テーブルにも反映させることが出来る
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_videos', function (Blueprint $table) {
            //
        });
    }
};
