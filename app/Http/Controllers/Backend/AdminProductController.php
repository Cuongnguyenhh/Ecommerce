<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;

use App\Models\Images;

class AdminProductController extends Controller
{
    protected $productController;
    protected $categoryController;
    public function __construct(productController $productController, CategoryController $categoryController)
    {
        $this->productController = $productController;
        $this->categoryController = $categoryController;
    }
    public function GetviewData(Request $request)
    {
        $product = $this->productController->getAllProductsAdmin();
        $productImage = $this->productController->getProductimages();
        // $productDetail = $this->productController->getProductDetails($request);
        return compact('product', 'productImage');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $viewData = $this->GetviewData($request);
        return view('dashboard_pages.products', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Product::where('product_id', $id)->first();
        $cate = $this->categoryController->getAllCategories();
        if (!$product) {
            abort(404); // Hiển thị trang 404 nếu sản phẩm không tồn tại
        }

        // Pass thông tin sản phẩm sang view để hiển thị form chỉnh sửa
        return view('dashboard_pages.editProduct', compact('product', 'cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



     public function update(Request $request, $id)
     {
         $product = Product::where('product_id', $id)->first();
         if (!$product) {
             abort(404);
         }
     
         try {
             $request->validate([
                 'product_name' => 'required|string|max:255',
                 'price' => 'required|numeric|min:0',
                 'product_visible' => 'required|boolean',
                 'category_id' => 'required|integer',
                 'description' => 'required|max:255',
             ]);
     
             $product->update([
                 'product_name' => $request->input('product_name'),
                 'price' => $request->input('price'),
                 'product_visible' => $request->input('product_visible'),
                 'category_id' => $request->input('category_id'),
                 'description' => $request->input('description'),
                 'sold' => 0,
             ]);
                dd($request->input());            
             
            //  return redirect()->route('products.index')->withMessage('The product has been updated successfully');
         } catch (\Exception $e) {
             \Log::error($e);
             return redirect()->back()->withErrors("Failed to update");
         }
 
     }
     
     


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}