<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * upでマイグレーションの実行
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //文字列型カラムを追加したときに使用
            $table->string('email');
            $table->string('password');
            $table->string('profile')->nullable();
        });

        
    }

    /**
     * Reverse the migrations.
     * downでマイグレーションを以前の状態へ戻す
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

//php artisan make:migration create_users_table
//でuserテーブルが生成される

