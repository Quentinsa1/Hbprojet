<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorPoint extends Model
{
    use HasFactory;

    protected $fillable = ['distributor_id', 'product_id', 'points', 'earned_at'];

    /**
     * Relation : Un point appartient à un distributeur.
     */
    public function distributor()
    {
        return $this->belongsTo(User::class, 'distributor_id');
    }

    /**
     * Relation : Un point est lié à un produit.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
