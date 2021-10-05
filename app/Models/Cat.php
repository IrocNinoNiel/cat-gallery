<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'size',
        'coat',
        'color',
        'temperament',
        'characteristics',
        'lifespan',
        'foods',
        'history',
        'status'
    ];
}
