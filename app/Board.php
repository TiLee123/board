<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = "boards";
    protected $primaryKey = 'boardId';

    public function itemtest()
    {
        return $this->hasOne(Item::class, 'itemId');
    }
    public $timestamps = false;
}
