<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000, 'jenis' => 'Pakaian', 'merek' => 'inkalum', 'material' => 'kain katun'],
        2 => ['name' => 'Stiker Koding', 'price' => 25000, 'jenis' => 'Kertas', 'merek' => 'inkalum', 'material' => 'stiker'],
        3 => ['name' => 'Notebook Dev', 'price' => 50000, 'jenis' => 'Laptop', 'merek' => 'inkalum', 'material' => 'aluminium'],
    ];

    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }
    public function show($id)
    {
        $products = $this->products[$id];
        return view('products.detail', compact('products'));
    }
}