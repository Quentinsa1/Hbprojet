<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // Afficher la liste des utilisateurs
    public function index()
    {
        $users = User::with('role')->get();
        return view('admin.users.index', compact('users'));
    }

    // Afficher un utilisateur spécifique
    public function show($id)
    {
        $user = User::with('role')->findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    // Créer un nouvel utilisateur
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    // Sauvegarder un utilisateur
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = new User($validated);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('admin.users.index');
    }

    // Modifier un utilisateur
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    // Mettre à jour un utilisateur
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email,' . $id,
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($id);
        $user->update($validated);
        return redirect()->route('admin.users.index');
    }

    // Supprimer un utilisateur
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
