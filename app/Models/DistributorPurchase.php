<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'distributor_id',
        'stockist_id',
        'product_id',
        'quantity',
        'amount',
        'status',
        'purchase_date'
    ];

    /**
     * Relation : Un achat est effectué par un distributeur.
     */
    public function distributor()
    {
        return $this->belongsTo(User::class, 'distributor_id');
    }

    /**
     * Relation : Un achat est effectué auprès d'un stockist.
     */
    public function stockist()
    {
        return $this->belongsTo(User::class, 'stockist_id');
    }

    /**
     * Relation : Un achat contient un produit.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
