@extends('welcome')
@section('home_content')
    @php $user = Auth::user();@endphp

    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input name="name" type="text" value="{{ $user->name }}"
                                    class="checkout__input__add" required>

                            </div>

                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input name="addr" type="text" value="{{ $user->user_adress }}"
                                    class="checkout__input__add" required>

                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input name="phone" value="{{ $user->phone }}" type="number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input name="email" value="{{ $user->email }}" type="text" required>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    @php
                                        $total = 0;
                                        $price = 0;
                                    @endphp
                                    @if ($cart != null)
                                        @foreach ($cart as $item)
                                            @php $price = $item['price'] * $item['quantity']; @endphp
                                            <li>{{ $item['name'] }} <span>${{ $price }}</span></li>
                                            @php $total += $price; @endphp
                                        @endforeach
                                    @endif
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Total <span>{{ $total }}<span></li>
                                </ul>

                                <button name="redirect " type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form style="float: right;" action="{{ route('vnpay.load') }}" method="post">
                    @csrf
                    <button style="width: 360px;" name="redirect" class="btn btn-primary" type="submit">VnPay</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
