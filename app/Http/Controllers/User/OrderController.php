<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Product;
use App\Models\ProductOrder;


class OrderController extends Controller
{

    public function order(Request $request){

        $user = auth()->user();
        if ($user->id == null) {
            abort(403);
        }

        $data = $request->validate([
            'warehouse' => ['required', 'string'],
            'quantity' => ['required', 'numeric'],
            'voucher' => ['nullable', 'string'],
            'product_id' => ['required', 'integer'],
        ]);

        $user = auth()->user();
        $data['customer_id'] = $user->id;

        ProductOrder::create($data);
        // dd($data);

        return back()->with('success', 'Product Ordered Successfully');

    }
}
