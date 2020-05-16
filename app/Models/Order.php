<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "hoa_don";
    protected $fillable = ["trang_thai", "tong_tien", "dat_ban_id", "user_id"];

    public function book()
    {
        return $this->belongsTo('App\Models\Book', 'dat_ban_id', 'id');
    }

    public function delete()
    {
        $this->detail()->delete();
        return parent::delete();
    }

    public  function  detail(){
        return $this->hasMany('App\Models\OrderDetail','hoa_don_id','id');
    }
}
