<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Push extends Model
{
    protected $table = "pushs";
    protected $primaryKey = 'pushId';
    public $timestamps = false;
}
