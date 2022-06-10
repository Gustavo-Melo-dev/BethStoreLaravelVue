<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(){
        $search = request('search');

        if($search){
            $products = Product::where([
                'name', 'LIKE', '%'.$search.'%'
            ])->orderBy('name', 'ASC')->get();
            $user = DB::table('users')->where('role', 'admin')->get();
        } else {
            $products = DB::table('products')->orderBy('name', 'ASC')->get();
            $user = DB::table('users')->where('role', 'admin')->get();
        }

        return Inertia::render('Products/Index', ['products' => $products, 'users' => $user, 'search' => $search]);
    }

    public function create(){
        return Inertia::render('Products/Create');
    }

    public function store(Request $request){
        Product::create([
            'name' => $request->name,
            'cod_product' => $request->cod_product,
            'qtd_product' => $request->qtd_product,
            'brand' => $request->brand,
            'size' => $request->size,
            'price' => $request->price,
            'description_product' => $request->description_product,
            'cod_category' => $request->cod_category,
            'sector' => $request->sector,
            'description_category' => $request->description_category,
            ]
        );

        return Redirect::route('dashboard')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function show($id){
        $product = Product::find($id);
        $user = DB::table('users')->where('role', 'admin')->get();
        return Inertia::render('Products/Show', ['product' => $product, 'user' => $user]);
    }

    public function edit($id){
        $product = Product::find($id);
        return Inertia::render('Products/Edit', ['product' => $product]);
    }

    public function update(Request $request){
        $product = Product::find($request->id);
        $product->update([
            'name' => $request->name,
            'cod_product' => $request->cod_product,
            'qtd_product' => $request->qtd_product,
            ]
        );
        return Redirect::route('dashboard')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('dashboard')->with('success', 'Produto excluído com sucesso!');
    }
}
