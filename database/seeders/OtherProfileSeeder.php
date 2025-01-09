<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OtherProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $distributorRole = Role::firstOrCreate(
            ['name' => 'distributor'],
            ['permissions' => json_encode([
                'manage_inventory',
                'view_orders',
                'manage_stockists'
            ])]
        );

        $stockistRole = Role::firstOrCreate(
            ['name' => 'stockist'],
            ['permissions' => json_encode([
                'view_inventory',
                'place_orders'
            ])]
        );
        User::firstOrCreate(
            ['email' => 'distributor1@example.com'],
            [
                'password' => Hash::make('password'),
                'role_id' => $distributorRole->id,
                'status' => 'active',
                'phone' => '1111111111',
                'address' => 'Distributor Office 1',
            ]
        );

        User::firstOrCreate(
            ['email' => 'distributor2@example.com'],
            [
                'password' => Hash::make('password'),
                'role_id' => $distributorRole->id,
                'status' => 'active',
                'phone' => '2222222222',
                'address' => 'Distributor Office 2',
            ]
        );

        // Stockists
        User::firstOrCreate(
            ['email' => 'stockist1@example.com'],
            [
                'password' => Hash::make('password'),
                'role_id' => $stockistRole->id,
                'status' => 'active',
                'phone' => '3333333333',
                'address' => 'Stockist Shop 1',
            ]
        );

        User::firstOrCreate(
            ['email' => 'stockist2@example.com'],
            [
                'password' => Hash::make('password'),
                'role_id' => $stockistRole->id,
                'status' => 'active',
                'phone' => '4444444444',
                'address' => 'Stockist Shop 2',
            ]
        );

        User::firstOrCreate(
            ['email' => 'stockist3@example.com'],
            [
                'password' => Hash::make('password'),
                'role_id' => $stockistRole->id,
                'status' => 'inactive',  // Un exemple d'utilisateur inactif
                'phone' => '5555555555',
                'address' => 'Stockist Shop 3',
            ]
        );
    }
}
