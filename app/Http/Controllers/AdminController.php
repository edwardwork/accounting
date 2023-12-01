<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return Admin::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);

        return Admin::create($request->validated());
    }

    public function show(Admin $admin)
    {
        return $admin;
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);

        $admin->update($request->validated());

        return $admin;
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return response()->json();
    }
}
