<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storey extends Model
{
    protected $table = "tang";
    protected $fillable = ['ten', 'so_ban'];

    public function book()
    {
        return $this->hasMany('App\Models\Book', 'tang_id', 'id')->orderByDesc('created_at');
    }
}
