<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'telepon' => 'required|numeric',
            'alamat' => 'required|string|max:100',
            'role' => 'required|string|in:super-admin, kasir',
        ]);
        return redirect()->back()->with('success', 'Data Admin Telah di Tambahkan');
    }
}