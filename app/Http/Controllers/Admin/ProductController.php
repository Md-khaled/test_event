<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Product;
use App\Models\ManageTime;


class ProductController extends Controller
{

    public function productList()
    {
        $managePlans = Product::latest()->get();
        return view('admin.product.list', compact('managePlans'));
    }


    public function productCreate(){
        $times = ManageTime::latest()->get();
        return view('admin.product.create', compact('times'));
    }


    public function productStore(Request $request){


        $data = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
            'subcategory_id' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'discount' => ['nullable', 'numeric'],
            'point' => ['nullable', 'numeric'],
            'stock' => ['required', 'numeric'],
        ]);

        Product::create($data);


        return back()->with('success', 'Product has been Added');
    }

}
