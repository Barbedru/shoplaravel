<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;

// Colonnes autorisées pour l'assignation de masse
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'active',
        'image',
    ];



    // Colonnes cachées lors de la sérialisation JSON
    protected $hidden = [];

     // Conversion automatique des types
     protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
     ];
}
