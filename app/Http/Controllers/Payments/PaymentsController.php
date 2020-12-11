<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function getPayments(Request $request) {

        // $orders = Payment::create($request->all());

        $orders = $request->all();

        return response()->json($orders);
    }

    public function getLast() {

        $query = Payment::latest('id')->first();
        return response()->json($query);
    }
}
