<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected $homeController;
    public function __construct(HomeController $homeController)
    {
        $this->homeController = $homeController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $viewData = $this->homeController->getViewData($request);

        $cart = session('cart');
        // dd($cart);
        return view('pages.checkout', array_merge(compact('cart'), $viewData));
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
        $viewData = $this->homeController->getViewData($request);
        $payment = 0;
        $cart = session('cart');
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'addr'  => 'required|max:255',
            'email' => 'required|email',
        ]);
        $payment = $request->input('payment');
        try {
            $order = Order::create([
                'user_name' => $request->input('name'),
                'user_phone' => $request->input('phone'),
                'user_email' => $request->input('email'),
                'user_address' => $request->input('addr'),


            ]);
            $id_order = $order->id;

            foreach ($cart as $cart) {
                OrderProduct::create([
                    'order_product' => $cart['product_id'],
                    'order_id' => $id_order,
                    'quantity' => $cart['quantity'],
                ]);
            }
        } catch (\Exception $e) {
            \Log::error($e);
            echo 'oh no, something went wrong';
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
        //
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
        //
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
