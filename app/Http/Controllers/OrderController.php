<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderController extends Controller
{
    public function addtoCart(Request $request)
    {
        $data = $request->all();
        // echo "<pre>";
        // print_r($data);
        // die;

        DB::table('order_details')->insert([
            'menu_id' => $data['menu_id'],
            'name' => $data['name'],
            'image' => $data['image'],
            'price' => $data['price'] * $data['quantity'],
            'quantity' => $data['quantity']
        ]);

        return redirect('/produk');
    }

    public function show()
    {
        return view('checkout', [
            'orders' => Order::all()
        ]);
    }
}
