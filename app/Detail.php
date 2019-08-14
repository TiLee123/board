<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = "details";
    protected $primaryKey = 'detailId';

    public function board()
    {
        return $this->hasOne(Board::class, 'boardId');
    }
}
