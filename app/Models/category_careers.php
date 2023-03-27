<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category_careers extends Model
{
    protected $fillable = [
        'category_career_id',
        'category_career_name',
        'category_career_picture',
    ];
}
