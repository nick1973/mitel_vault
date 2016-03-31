<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lob extends Model
{
    protected $table = 'lobs';

    protected $fillable = [
        'selection'
    ];
}
