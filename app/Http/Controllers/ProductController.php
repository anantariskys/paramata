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
        $categories = Category::with('subCategories')->get();
        
        return view('product', compact('products', 'categories'));
    }
    public function category($id)
    {
        $products = Products::with('category')->where('category_id', $id)-> get();
        $categories = Category::with('subCategories')->get();
        $category = Category::findOrFail($id);
        return view('product.category', compact('products', 'categories', 'category'));
    }

    public function subCategory($categoryId, $subCategoryId)
    {
        $products = Products::with('category')->where('category_id', $categoryId)->where('subcategory_id', $subCategoryId)->get();
        $categories = Category::with('subCategories')->get();
        $category = Category::findOrFail($categoryId);
        return view('product.category', compact('products', 'categories', 'category'));
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        $categories = Category::with('subCategories')->get();
        $relatedProducts = Products::where('category_id', $product->category_id)->get();
        return view('product.show', compact('product', 'categories', 'relatedProducts'));
    }
    public function create()
    {
        $categories = Category::with('subCategories')->get();
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
        $categories = Category::with('subCategories')->get();
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

    public function getProductsByCategory($category)
    {
        $products = Products::where('category_id', $category)->get();
        return view('products.category', compact('products'));
    }


}
