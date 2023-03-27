<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $fillable = [
        'quiz_id',
        'type_score_id',
        'quiz_name',
    ];
}
