<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Images;


class productController extends Controller
{
    public function getAllProducts()
    {
        $allProducts = Product::where('products.visible', 0) // Specify 'products.visible'
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->paginate(8);
        return $allProducts;
    }
    public function getBestsellersProducts()
    {
        $bestsellerProducts =  Product::where('visible', 0)
            ->orderBy('sold', 'desc')
            ->get();
        return $bestsellerProducts;
    }

    public function getNewProducts()
    {
        $sevenDaysAgo = Carbon::now()->subDays(7);

        $products = Product::where('visible', 0)
            ->whereDate('created_at', '>=', $sevenDaysAgo)
            ->orderBy('created_at', 'desc')
            ->limit('4')
            ->get();
        return $products;
    }

    public function getHotProducts()
    {
        $sevenDaysAgo = Carbon::now()->subDays(3);

        $products = Product::where('visible', 0)
            ->whereDate('created_at', '>=', $sevenDaysAgo)
            ->orderBy('created_at', 'desc')
            ->orderBy('sold', 'desc')
            ->limit('5')
            ->get();
        return $products;
    }

    public function getProductDetails(Request $request)
    {
        $id = $request->get('id');
        $productDetails = Product::where('visible', 0)
            ->where('id', $id)->first();
        return $productDetails;
    }

    public function getProductimages()
    {
        $productImages = Images::join('products', 'images.id_product', '=', 'products.product_id')
            ->get();
        return $productImages;
    }
}
