<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $products = Product::where('teams_id', $user->currentTeam->id)->get();
        return Inertia::render('Products', compact('products'));
    }
}
