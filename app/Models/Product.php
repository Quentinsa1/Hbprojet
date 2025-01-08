<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'ap_points', 'description', 'active'];

    /**
     * Relation : Un produit appartient à plusieurs packs via PackProduct.
     */
    public function packProducts()
    {
        return $this->hasMany(PackProduct::class);
    }
}
