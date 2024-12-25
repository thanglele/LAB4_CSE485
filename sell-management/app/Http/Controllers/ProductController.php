<?php

namespace App\Http\Controllers;


use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'price' => 'required',
            ]);

            Products::create($request->all());

            //return response()->json(['success' => 'Product created successfully.'], 200);
            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return response()->json(['messeges', $e->getMessage()], 500);
        }
    }

    public function show(Products $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'price' => 'required',
            ]);
            Products::findOrFail($id)->update($request->all());

            return redirect()->route('products.index')
                ->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            return response()->json(['messeges', $e->getMessage()], 500);
        }
    }


    public function destroy($id)
    {
        try {
            Products::findOrFail($id)->delete();

            return redirect()->route('products.index')
                ->with('success', 'Product deleted successfully');
        } catch (\Exception $e) {
            return response()->json(['messeges', $e->getMessage()], 500);
        }

    }
}
