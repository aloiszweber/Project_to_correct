<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'path',
        'name',
        'price',
        'reference',
        'disponibility'
    ];
}
