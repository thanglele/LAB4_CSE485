<?php

namespace App\Http\Controllers;

use App\Models\Order_details;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    // Display a listing of the order details for a specific order
    public function index($orderId)
    {
        $order = Orders::with('orderDetails.product')->findOrFail($orderId);
        return view('order_details.index', compact('order'));
    }

    // Show the form for creating a new order detail
    public function create($orderId)
    {
        $order = Orders::findOrFail($orderId);
        $products = Products::all();
        return view('order_details.create', compact('order', 'products'));
    }

    // Store a newly created order detail in storage
    public function store(Request $request, $orderId)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $orderDetail = new Order_details([
            'order_id' => $orderId,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        $orderDetail->save();

        return redirect()->route('order_details.index', $orderId)
            ->with('success', 'Order detail created successfully.');
    }

    // Display the specified order detail
    public function show($orderId, $id)
    {
        $orderDetail = Order_details::where('order_id', $orderId)->findOrFail($id);
        return view('order_details.show', compact('orderDetail'));
    }

    // Show the form for editing the specified order detail
    public function edit($orderId, $id)
    {
        $orderDetail = Order_details::where('order_id', $orderId)->findOrFail($id);
        $products = Products::all();
        return view('order_details.edit', compact('orderDetail', 'products'));
    }

    // Update the specified order detail in storage
    public function update(Request $request, $orderId, $id)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $orderDetail = Order_details::where('order_id', $orderId)->findOrFail($id);
        $orderDetail->update($request->all());

        return redirect()->route('order_details.index', $orderId)
            ->with('success', 'Order detail updated successfully.');
    }

    // Remove the specified order detail from storage
    public function destroy($orderId, $id)
    {
        $orderDetail = Order_details::where('order_id', $orderId)->findOrFail($id);
        $orderDetail->delete();

        return redirect()->route('order_details.index', $orderId)
            ->with('success', 'Order detail deleted successfully.');
    }
}