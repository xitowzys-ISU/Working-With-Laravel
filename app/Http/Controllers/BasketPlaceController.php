<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketPlaceController extends Controller
{
    public function index() {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }

        $order = Order::find($orderId);

        return view('order', compact('order'));
    }

    public function basketConfirm(Request $request) {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);

        $success = $order->saveOrder($request->name, $request->phone);

        if($success)
            session()->flash('success', 'Ваш заказ принят в обработку!');
        else
            session()->flash('warning', 'Ошибка');

        return redirect()->route('index');
    }
}
