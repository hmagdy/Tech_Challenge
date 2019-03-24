<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    //
    public function index()
    {
        $orders=Order::all();
        return view('dashboard.orders',compact('orders'));
    }

    public function add($ordertitle)
    {
    $order=new Order();
    $order->item_title=$ordertitle;
    $order->save();
        return redirect()->route('afterorder');
    }
}
