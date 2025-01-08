<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'type', 'balance', 'last_updated'
    ];

    /**
     * Relation : Un wallet appartient à un utilisateur.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
