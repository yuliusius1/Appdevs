<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;


class MenuController extends Controller
{
    public function show()
    {
        return view('produk', [
            'foods' => Menu::where('category', 'food')->get(),
            'drinks' => Menu::where('category', 'drink')->get()
        ]);
    }

    public function order(Menu $menu)
    {
        return view('order', [
            'menu' => $menu
        ]);
    }
}
