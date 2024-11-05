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
            $table->foreignId('category_id')->nullable()->constrained();
            //'categories_id'は'categoriesテーブル'の'id'を参照する外外部キー
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
