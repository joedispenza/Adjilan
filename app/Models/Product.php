<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        'description_du_produit',
        'prix',
        'categorie_du_produit',
        "quantite_en_stock",
        "status", "date_de_livraison"
    ];
}
