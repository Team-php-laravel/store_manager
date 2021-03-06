<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "bai_viet";
    protected $fillable = ["tieu_de", "hinh_anh", "mo_ta", "noi_dung", "user_id", 'trang_thai'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
