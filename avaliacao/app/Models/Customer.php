<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'cpf',
        'rg',
        'birth_date',
        'telephone',
        'birth_place',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
