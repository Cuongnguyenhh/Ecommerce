<?php

namespace App\Http\Controllers;

use App\Http\Controllers\productController;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Http\Controllers\CategoryController;

class HomeController extends Controller
{
    protected $productController;
    protected $categoryController;
    public function __construct(ProductController $productController, CategoryController $categoryController)
    {
        $this->productController = $productController;
        $this->categoryController = $categoryController;
    }
    public function getViewData(Request $request)
    {
        $allProducts = $this->productController->getAllProducts();
        $bestSellerProducts = $this->productController->getBestsellersProducts();
        $newProducts = $this->productController->getNewProducts();
        $hotProducts = $this->productController->getHotProducts();
        $productImages = $this->productController->getProductImages();
        $categories = $this->categoryController->getAllCategories();
        return compact('newProducts', 'allProducts', 'bestSellerProducts', 'hotProducts', 'productImages','categories');
    }

    public function index(Request $request)
    {
        $viewData = $this->getViewData($request);
        return view('pages.home', $viewData);
    }
    public function product(Request $request)
    {
        $viewData = $this->getViewData($request);
        return view('pages.store', $viewData);
    }
}
