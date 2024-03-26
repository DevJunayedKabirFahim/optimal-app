<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class OptimalController extends Controller
{
    public function index()
    {
        return view('frontend.home.index', [
            'products' => Product::where('featured_status', 1)->orderBy('id', 'desc')->take(8)->get(['id', 'name', 'image', 'category_id', 'selling_price', 'regular_price']),
        ]);
    }

    public function category($id)
    {
        return view('frontend.category.index', [
            'categories' => Category::where('id', $id)->get(),
            'products' => Product::where('category_id', $id)->orderBy('id', 'desc')->get(['id', 'name', 'image', 'selling_price', 'regular_price']),
        ]);
    }

    public function detail($id)
    {
        return view('frontend.product.index', ['product' => Product::find($id)]);
    }

    public function addToCard(Request $request)
    {
        return $request;
    }
}
