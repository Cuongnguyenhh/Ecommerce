<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

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
        $cate = $this->categoryController->getAllCategories();
        // $productDetail = $this->productController->getProductDetails($request);
        return compact('product', 'productImage','cate');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testjsonResponse(Request $request)
    {
        $viewData = $this->GetviewData($request);
        return response()->json($viewData);
    }
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
        $cate = $this->categoryController->getAllCategories();
        return view('dashboard_pages.createProduct', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'product_name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'product_visible' => 'required|boolean',
                'category_id' => 'required|integer',
                'description' => 'required|max:255',
            ]);

            $product =  Product::create([
                'product_name' => $request->input('product_name'),
                'price' => $request->input('price'),
                'product_visible' => $request->input('product_visible'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'sold' => 0,

            ]);
            $id = $product->product_id;


            if ($request->hasFile('product_images')) {
                $images = $request->file('product_images');
                foreach ($images as $image) {
                    Images::where('id_product', $id)->delete();
                }
                foreach ($images as $image) {

                    $path = $image->move('frontend/img/product', $image->getClientOriginalName());
                    Images::create([
                        'id_product' => $id,
                        'link' => $image->getClientOriginalName(), // Save the image file path, not the image data itself
                    ]);
                }
            }
            return redirect()->route('products.index')->withMessage('The product has been updated successfully');
        } catch (\Exception $e) {
            \Log::error($e);
            echo 'oh no, something went wrong';
            // return redirect()->back();
        }
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
            return view('pages.404');// Hiển thị trang 404 nếu sản phẩm không tồn tại
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
            $product->product_name = $request->input('product_name');
            $product->price = $request->input('price');
            $product->product_visible = $request->input('product_visible');
            $product->category_id = $request->input('category_id');
            $product->description = $request->input('description');
            $product->sold = 0;
            $product->save();
            if ($request->hasFile('product_images')) {
                $images = $request->file('product_images');
                foreach ($images as $image) {
                    Images::where('id_product', $id)->delete();
                }
                foreach ($images as $image) {

                    $path = $image->move('frontend/img/product', $image->getClientOriginalName());
                    echo $path . '<br>' . $id;
                    Images::create([
                        'id_product' => $id,
                        'link' => $image->getClientOriginalName(), // Save the image file path, not the image data itself
                    ]);
                }
            }

            return redirect()->back();
            //  return redirect()->route('products.index')->withMessage('The product has been updated successfully');
        } catch (\Exception $e) {
            \Log::error($e);
            return redirect()->back();
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
