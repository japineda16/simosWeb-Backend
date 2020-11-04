<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function getOrders(Request $request) {
        $orders = [];

        foreach ($request->all() as $item) {
            $loop = Orders::create($item);
            array_push($orders, $loop);
        }

        return $orders;
    }
}
