<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacina extends Model
{
    use HasFactory;

    protected $primaryKey = 'nome_vacina';

    protected $incrementing = false;

    protected $keyType= 'string';

    protected $fillable = [
        'quantidade',

    ];
}
