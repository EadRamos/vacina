<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comorbidades_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comorbidade_id',
    ];
}
