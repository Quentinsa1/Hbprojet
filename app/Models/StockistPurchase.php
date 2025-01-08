<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockistPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'stockist_id', 'pack_id', 'amount_paid', 'status', 'purchase_date'
    ];

    /**
     * Relation : Un achat est effectué par un stockiste.
     */
    public function stockist()
    {
        return $this->belongsTo(User::class, 'stockist_id');
    }

    /**
     * Relation : Un achat correspond à un pack de produits.
     */
    public function productPack()
    {
        return $this->belongsTo(ProductPack::class, 'pack_id');
    }
}
