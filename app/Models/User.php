<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'role_id',
        'status',
        'phone',
        'address',
    ];

    /**
     * Les attributs à masquer pour les tableaux.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les types de colonnes à caster.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relation : Un utilisateur a un rôle.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Relation : Un utilisateur a plusieurs wallets.
     */
    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    /**
     * Relation : Un utilisateur peut être impliqué dans plusieurs transactions.
     * Un utilisateur peut être l'expéditeur (from_user_id) ou le destinataire (to_user_id).
     */
    public function transactionsAsSender()
    {
        return $this->hasMany(Transaction::class, 'from_user_id');
    }

    public function transactionsAsReceiver()
    {
        return $this->hasMany(Transaction::class, 'to_user_id');
    }

    /**
     * Relation : Un utilisateur peut avoir plusieurs sponsors et être sponsorisé.
     * Le parrainage peut être en tant que sponsor ou distributeur.
     */
    public function sponsorshipsAsSponsor()
    {
        return $this->hasMany(Sponsorship::class, 'sponsor_id');
    }

    public function sponsorshipsAsDistributor()
    {
        return $this->hasMany(Sponsorship::class, 'distributor_id');
    }

    /**
     * Relation : Un utilisateur a plusieurs achats de stockiste.
     */
    public function stockistPurchases()
    {
        return $this->hasMany(StockistPurchase::class);
    }

    /**
     * Relation : Un utilisateur peut avoir plusieurs achats de distributeur.
     */
    public function distributorPurchases()
    {
        return $this->hasMany(DistributorPurchase::class);
    }
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function isDistributor()
    {
        return $this->hasRole('distributor');
    }

    public function isStockist()
    {
        return $this->hasRole('stockist');
    }

    public function hasRole($roleName)
    {
        return $this->role->name === $roleName;
    }
}
