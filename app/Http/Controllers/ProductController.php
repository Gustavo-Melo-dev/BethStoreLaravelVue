<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function store(Request $request){

        Product::create([
            'cod_product' => $request->cod_product,
            'qtd_product' => $request->qtd_product,
            'model' => $request->model,
            'brand' => $request->brand,
            'size' => $request->size,
            'price' => $request->price,
            'description_product' => $request->description_product,
            'cod_category' => $request->cod_category,
            'sector' => $request->sector,
            'description_category' => $request->description_category
        ]);

        return Redirect::route('dashboard');
    }
}
