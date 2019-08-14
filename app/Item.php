<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";
    protected $primaryKey = 'itemId';

    public function board()
    {
        return $this->hasMany(Board::class, 'itemId');
    }
}
