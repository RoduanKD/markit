<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->paginate(3);
        return view('admin.order.index' , compact('orders'));
    }

    public function create()
    {
        return view('admin.order.create');
    }

    public function show(Order $order)
    {
        return view('admin.order.show' , compact('order'));
    }

    public function edit()
    {
        return view('admin.order.edit');
    }
    public function destroy($order)
    {
        $order->delete();
        session()->flash('message','The order was deleted successfully');
        session()->flash('message-type','success');
        return redirect()->route('admin.order.index');
    }
}
