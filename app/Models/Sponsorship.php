<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    // La table associée au modèle
    protected $table = 'sponsorships';

    // Colonnes qui peuvent être mass-assignées
    protected $fillable = [
        'sponsor_id',
        'distributor_id',
        'sponsored_at',
        'level',
    ];

    // Relation avec le modèle User (sponsor)
    public function sponsor()
    {
        return $this->belongsTo(User::class, 'sponsor_id');
    }

    // Relation avec le modèle User (distributeur)
    public function distributor()
    {
        return $this->belongsTo(User::class, 'distributor_id');
    }
}
