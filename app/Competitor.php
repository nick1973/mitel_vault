<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    protected $table = 'competitor';

    protected $fillable = [
        'selection'
    ];
}
