<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
<<<<<<< HEAD
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
=======
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Produk A', 'price' => 10000],
            ['id' => 2, 'name' => 'Produk B', 'price' => 15000],
            ['id' => 3, 'name' => 'Produk C', 'price' => 20000],
        ];

        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $products = [
            1 => ['name' => 'Produk A', 'price' => 10000],
            2 => ['name' => 'Produk B', 'price' => 15000],
            3 => ['name' => 'Produk C', 'price' => 20000],
        ];

        $product = $products[$id] ?? null;

        return view('products.show', ['product' => $product]);
    }
}
>>>>>>> 44fbb87 (BLADE TAMPLATE)
