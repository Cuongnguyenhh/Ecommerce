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
    public function productbyCate(Request $request, $id = null)
    {
        $viewData = $this->getViewData($request, $id);
        $productByCate = $viewData['productByCate'];

        if ($productByCate->all() == null) {
            return view('pages.404');
        }
        return view('pages.productListByCate', $viewData);
    }
    public function productDetails(Request $request, $id = null)
    {
        $viewData = $this->getViewData($request, $id);
        if ($viewData['productDetails'] == null) {
            return view('pages.404');
        }
        return view('pages.productDetail', $viewData);
    }
    public function successpayment(Request $request, $id = null)
    {
        $viewData = $this->getViewData($request, $id);
        return view('pages.sucssespay', $viewData);
    }
}
