<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "khach_hang";
    protected $fillable = ["ho_ten","so_dien_thoai","so_cmnd","so_lan_dat_phong"];
    
}
