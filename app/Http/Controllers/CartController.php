<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Http\Controllers\CategoryController;

class CartController extends Controller
{
    protected $productController;
    protected $categoryController;
    public function __construct(ProductController $productController, CategoryController $categoryController)
    {
        $this->productController = $productController;
        $this->categoryController = $categoryController;
    }
    public function getViewData(Request $request, $id = null)
    {
        $allProducts = $this->productController->getAllProducts();
        $bestSellerProducts = $this->productController->getBestsellersProducts();
        $newProducts = $this->productController->getNewProducts();
        $hotProducts = $this->productController->getHotProducts();
        $productImages = $this->productController->getProductImages();
        $categories = $this->categoryController->getAllCategories();
        $productDetails = $this->productController->productDetails($request);

        $productByCate = $this->productController->ProductBycategoryId($id);


        return compact('newProducts', 'allProducts', 'bestSellerProducts', 'hotProducts', 'productImages', 'categories', 'productByCate', 'productDetails');
    }
    public function addToCart(Request $request)
    {

        $productId = $request->input('id');


        $product = Product::where('product_id', $productId)->first();

        if (!$product) {
            abort(404);
        }

        $quantity = $request->input('quantity', 1);


        $cart = $request->session()->get('cart', []);
        if (isset($cart[$productId])) {

            $cart[$productId]['quantity'] += $quantity;
        } else {

            $cart[$productId] = [
                'product_id' => $product->product_id,
                'name' => $product->product_name,
                'price' => $product->price,
                'quantity' => $quantity,
            ];
        }


        $request->session()->put('cart', $cart);


        $viewData = $this->getViewData($request, $id = null);

        // return redirect()->back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng.');
        return array_merge(compact('cart'), $viewData);
    }

    public  function shopingcart(Request $request, $id = null){
        $cart = [];
        $viewData = $this->getViewData($request, $id);
        $cart = session('cart');
        return view('pages.cart', array_merge(compact('cart'), $viewData));
    }

    public function removeFromCart(Request $request, $productId)
    {
        // Lấy giỏ hàng từ session
        $cart = $request->session()->get('cart', []);

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng hay không
        if (isset($cart[$productId])) {
            // Lấy thông tin sản phẩm cần xóa
            $product = $cart[$productId];

            // Xóa sản phẩm khỏi giỏ hàng
            $request->session()->forget('cart.' . $productId);
            return redirect()->route('shopingcart');
        }
    }
}
