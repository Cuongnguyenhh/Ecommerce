@extends('welcome')
@section('home_content')
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            @php $count = 1; @endphp
                            @foreach ($productImages as $img)
                                @if ($img->id_product == $productDetails->product_id)
                                    <li class="nav-item">
                                        <a class="nav-link @if($count === 1) active @endif" data-toggle="tab" href="#tabs-{{$count}}" role="tab">
                                            <div class="product__thumb__pic set-bg" data-setbg="img/product/{{$img->link}}">
                                            </div>
                                        </a>
                                    </li>
                                    @php $count++; @endphp
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            @php $count = 1; @endphp
                            @foreach ($productImages as $img)
                                @if ($img->id_product == $productDetails->product_id)
                                    <div class="tab-pane @if($count === 1) active @endif" id="tabs-{{$count}}" role="tabpanel">
                                        <div class="product__details__pic__item">
                                            <img src="img/product/{{$img->link}}" alt="">
                                        </div>
                                    </div>
                                    @php $count++; @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{$productDetails->product_name}}</h4>
                         
                            <h3>${{$productDetails->price}}</h3>
                            <p>{{$productDetails->description}}</p>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Size:</span>
                                    <label for="xxl">xxl
                                        <input type="radio" id="xxl">
                                    </label>
                                    <label class="active" for="xl">xl
                                        <input type="radio" id="xl">
                                    </label>
                                    <label for="l">l
                                        <input type="radio" id="l">
                                    </label>
                                    <label for="sm">s
                                        <input type="radio" id="sm">
                                    </label>
                                </div>
                                <div class="product__details__option__color">
                                    <span>Color:</span>
                                    <label class="c-1" for="sp-1">
                                        <input type="radio" id="sp-1">
                                    </label>
                                    <label class="c-2" for="sp-2">
                                        <input type="radio" id="sp-2">
                                    </label>
                                    <label class="c-3" for="sp-3">
                                        <input type="radio" id="sp-3">
                                    </label>
                                    <label class="c-4" for="sp-4">
                                        <input type="radio" id="sp-4">
                                    </label>
                                    <label class="c-9" for="sp-9">
                                        <input type="radio" id="sp-9">
                                    </label>
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <form action="{{ route('cart.add', ['id' => $productDetails->product_id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $productDetails->product_id }}">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" name="quantity" value="1">
                                        </div>
                                    </div>
                                    <button type="submit" class="primary-btn">Thêm vào giỏ hàng</button>
                                </form>
                                
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
@endsection
