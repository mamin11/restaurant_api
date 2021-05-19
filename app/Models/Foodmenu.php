<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodmenu extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        // 'price' => 'decimal:2',
    ];

    protected $fillable = [
        'title',
        'price',
        'category',
        'description',
        'image',
    ];
}
