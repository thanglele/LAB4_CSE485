<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    // Display a listing of the orders
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    // Show the form for creating a new order
    public function create()
    {
        return view('orders.create');
    }

    // Store a newly created order in storage
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|integer',
            'order_date' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        Orders::create($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully.');
    }

    // Display the specified order
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show', compact('order'));
    }

    // Show the form for editing the specified order
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit', compact('order'));
    }

    // Update the specified order in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required|integer',
            'order_date' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        $order = Order::find($id);
        $order->update($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully.');
    }

    // Remove the specified order from storage
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully.');
    }
}
