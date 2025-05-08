<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'telepon' => 'required|numeric',
            'message' => 'required|string|max:150',
        ]);
        return redirect()->back()->with('success', 'Pesan Sudah Di Kirim');
    }
}