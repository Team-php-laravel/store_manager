<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "dat_ban";
    protected $fillable = ["tang_id","so_ban_dat","thoi_gian_dat","nguoi_dat","so_dien_thoai", "trang_thai"];

    public function tang(){
        return $this->belongsTo('App\Models\Storey','tang_id','id');
    }

    public function order(){
        return $this->hasOne('App\Models\Order','dat_ban_id','id');
    }

}
