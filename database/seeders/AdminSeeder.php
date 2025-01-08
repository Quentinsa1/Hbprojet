<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Crée ou récupère le rôle admin
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin'],
            ['permissions' => 'all'] // Définir des permissions si nécessaire
        );

        // Crée l'utilisateur admin
        User::firstOrCreate(
            ['email' => 'admin@example.com'], // Unicité basée sur l'email
            [
                'password' => Hash::make('password'),
                'role_id' => $adminRole->id,
                'status' => 'active',
                'phone' => '0000000000',
                'address' => 'Admin HQ',
            ]
        );
    }
}
