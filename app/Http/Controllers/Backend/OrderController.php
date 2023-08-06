<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\productController;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
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
        $order = Order::all();
       
        // $productDetail = $this->productController->getProductDetails($request);
        return compact('product', 'productImage','order');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $viewData = $this->GetviewData($request);
        return view('dashboard_pages.order',  $viewData);
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
    public function show(Request $request, $id)
    {
        $viewData = $this->GetviewData($request);
        $order_product = OrderProduct::where('order_id', $id)
        ->join('products', 'order_product', '=', 'product_id')
        ->get();
       
        return view('dashboard_pages.orderdetail', array_merge(compact('order_product'),$viewData));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $order = Order::find($id)->first();
        $order->status = 1;
        $order->save();
        return redirect('/dashboard/order');
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
