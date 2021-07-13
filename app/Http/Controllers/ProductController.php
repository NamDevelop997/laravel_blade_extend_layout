<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show($id)
    {
        $price = 2000;
        return view('product.show', compact('price', 'id'));
    }
    function create()
    {
        return 'Create Product!';
    }

    function del($id)
    {
        return "Delete Product! -- {$id}";
    }
}
