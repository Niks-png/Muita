<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(){
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    public function show($id){
        $user = User::all()->findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::all()->findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|unique:users|max:255',
            'full_name' => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|string|max:255',
        ]);

        $validated['id'] = \Illuminate\Support\Str::uuid();
        $validated['active'] = 'true';
        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function update(Request $request, $id)
    {
        $user = User::all()->findOrFail($id);
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'active' => 'required|boolean',
        ]);
        $user->update($validated);
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::all()->findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
