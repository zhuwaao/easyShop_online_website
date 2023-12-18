<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function view($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        return view('admin.image_view', compact('product'));
    }
}
