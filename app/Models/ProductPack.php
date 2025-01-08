<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPack extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'total_amount', 'active'];

    /**
     * Relation : Un pack contient plusieurs produits.
     */
    public function packProducts()
    {
        return $this->hasMany(PackProduct::class, 'pack_id');
    }
}
