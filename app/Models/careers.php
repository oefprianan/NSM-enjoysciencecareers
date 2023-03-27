<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class careers extends Model
{
    protected $fillable = [
        'career_id',
        'category_career_id',
        'career_name_th',
        'career_name_en',
        'score_naturalistic',
        'score_intrapersonal',
        'score_interpersonal',
        'score_musical',
        'score_bodily_kinesthetic',
        'score_spatial',
        'score_logical_mathematical',
        'score_linguistic',
        'career_picture',
    ];
}
