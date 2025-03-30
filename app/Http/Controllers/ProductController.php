<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;
use App\DataTables\ProductsDataTable;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::with('category')->get();
        return view('products.products', compact('products'));
    }


    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('products.show', compact('product'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'productname' => 'required|string|max:255',
            'description' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $pictureName = null;
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $pictureName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('products', $pictureName, 'public');
        }

        Products::create([
            'productname' => $request->productname,
            'description' => $request->description,
            'picture' => $pictureName,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        
        $request->validate([
            'productname' => 'required|string|max:255',
            'description' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $pictureName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('products', $pictureName, 'public');
            $product->picture = $pictureName;
        }

        $product->update([
            'productname' => $request->productname,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    public function getProducts()
    {
        return response()->json(Products::with('category')->get());
    }


}
