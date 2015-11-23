<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telephon extends Model
{
    protected $table = 'Telephone';

    public $timestamps = false;

    protected $fillable = ['telephone', 'user_id'];
}
