<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "hoa_don";
    protected $fillable = ["trang_thai","tong_tien","dat_ban_id","user_id"];
}
