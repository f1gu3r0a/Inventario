<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Especifica los atributos que se pueden asignar masivamente.
    protected $fillable = [
        'name', 'description', 'quantity', 'price',
    ];
}
