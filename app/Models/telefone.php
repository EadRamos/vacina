<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefone extends Model
{
    use HasFactory;


    protected $primaryKey = 'numero';

    protected $incrementing = false;

    protected $keyType= 'string';

    protected $fillable = [
        'user_id',

    ];
}
