<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemMatrix extends Model
{
    protected $table = 'system_matrix';

    protected $fillable = [
        'selection'
    ];
}
