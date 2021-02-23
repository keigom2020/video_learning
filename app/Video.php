<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // メソッド　DBに絡む記述、使い回しできるものはコントローラではなく、こちらに記述するようにする
    public static function nextVideo($id) {
        return Video::where('id', $id)->count();
    }

    // 動画とユーザーの関係は多対多のはず
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
