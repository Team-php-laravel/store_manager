<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "tang";
    protected $fillable = ["so_ban","ten"];
}
