<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class type_scores extends Model
{
    protected $fillable = [
        'type_score_id',
        'type_score_name_th',
        'type_score_name_en',
    ];
}
