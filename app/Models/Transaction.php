<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'from_user_id', 'to_user_id', 'amount', 'status', 'created_at'
    ];

    /**
     * Relation : Une transaction provient d'un utilisateur.
     */
    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    /**
     * Relation : Une transaction est envoyée à un autre utilisateur.
     */
    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }
}
