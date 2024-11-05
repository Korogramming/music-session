<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostVideo extends Model
{
    use HasFactory;

    //Userに対するリレーション[1対多]なので単数系(userが１，postvideoが多) 
    public function user(){
        //belong to ~に所属する
        return $this->belongsTo(User::class);
        /*あるPostvideoモデルのインスタンスから関連する一つのUserモデルのインスタンス
        　あるUserモデルのインスタンスから関連する複数のPostvideoモデルのインスタンス
        を呼び出せる */
        //インスタンスー＞実体のある具体的な物を指すことが多い
    }

    //Commentに対するリレーション[1対多]なので複数形(相手が複数ある)
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //単数...hasOne, 複数..hasMany
    public function likes(){
        return $this->hasMany(Like::class);
    }

    //単数...belongsTo, 複数...belongsToMany
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
