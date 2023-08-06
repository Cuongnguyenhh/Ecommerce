<!-- Phần hiển thị giỏ hàng -->
@extends('welcome')
@section('home_content')
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $imgProduct = null; $total = 0; @endphp
                                @if ($cart)
                                @foreach ($cart as $productId => $product)
                                @foreach ($productImages as $img )
                                @php 
                                if($img->id_product == $product['product_id']){
                                    $imgProduct = $img->link;
                                        break;
                                }
                                @endphp
                                @endforeach
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img style="width: 90px; height: 90px;" src="img/product/{{$imgProduct}}" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{ $product['name'] }}</h6>
                                            <h5>${{ $product['price'] }}</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <span>{{ $product['quantity'] }}</span>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{$product['quantity'] * $product['price']}}</td>
                                    <td class="cart__close">
                                            <form action="{{ route('cart.remove', ['id' => $productId]) }}"
                                                method="POST">
                                                @csrf
                                                <button class="btn btn-primary w-10 h-10" type="submit">Remove</button>
                                            </form>
                                    </i></td>
                                </tr>
                                @php 
                                    $total += $product['quantity'] * $product['price'];
                                    
                                 @endphp
                            @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{url('/')}}">Continue Shopping</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total <span>$ {{$total}}</span></li>
                        </ul>
                        <a href="{{ route('checkout.index') }}" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- Phần hiển thị giỏ hàng -->
