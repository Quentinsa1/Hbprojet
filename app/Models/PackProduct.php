<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackProduct extends Model
{
    use HasFactory;

    protected $fillable = ['pack_id', 'product_id', 'quantity', 'price'];

    /**
     * Relation : Un produit pack contient un produit.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Relation : Un produit pack appartient à un pack.
     */
    public function productPack()
    {
        return $this->belongsTo(ProductPack::class, 'pack_id');
    }
}
