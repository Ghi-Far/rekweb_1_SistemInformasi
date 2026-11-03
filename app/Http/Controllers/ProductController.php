<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('Products.create');
    }

    public function store(Request $request)
    {
    // 1. Simpan SEMUA hasil validasi ke variabel $validated
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // 2. Tambahkan data gambar ke dalam array $validated jika ada file yang diunggah
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();

        // Pindahkan file ke folder storage/app/public/products
        $file->move(public_path('storage/products'), $filename);

        // Tambahkan path gambar ke array yang akan disimpan
        $validated['image'] = 'products/' . $filename;
    }

    // 3. Simpan seluruh data (teks + gambar) ke database
    Product::create($validated);

    return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'stock' => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        // Hapus gambar lama jika ada
        if ($product->image && file_exists(public_path('storage/' . $product->image))) {
            unlink(public_path('storage/' . $product->image));
        }

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $destination = public_path('storage/products');

        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        $file->move($destination, $filename);
        $validated['image'] = 'products/' . $filename;
    }

    $product->update($validated);

    return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
