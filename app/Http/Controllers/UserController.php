<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User sudah ada

class UserController extends Controller
{
    // Tampilkan form tambah user
    public function create()
    {
        return view('user.index');
    }

    // Proses simpan user dari form
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Simpan user ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Kembalikan ke form dengan pesan sukses
        return redirect()->back()->with('success', 'User berhasil ditambahkan!');
    }

    // (opsional) Fungsi-fungsi sebelumnya dari tugas lama bisa ditaruh di bawah ini...
    // public function index() { ... }
    // public function edit($id) { ... }
    // public function update(Request $request, $id) { ... }
}
