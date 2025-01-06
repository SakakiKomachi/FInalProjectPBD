<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products.index', ['products' => $products]);
    }

    // app/Http/Controllers/ProductController.php

public function show($id)
{
    $product = $this->getProductById($id); // Fungsi untuk mendapatkan data produk berdasarkan ID

    return view('products.show', compact('product'));
}

// Fungsi untuk mengambil data produk berdasarkan ID
private function getProductById($id)
{
    $products = [
        // Daftar produk seperti sebelumnya
    ];

    return collect($products)->firstWhere('id', $id);
}

}
