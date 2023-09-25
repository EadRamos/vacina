<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comorbidades extends Model
{
    use HasFactory;

    protected $primaryKey = 'nome';

    protected $incrementing = false;

    protected $keyType= 'string';

    protected $fillable = [
        'descricao',

    ];
}
