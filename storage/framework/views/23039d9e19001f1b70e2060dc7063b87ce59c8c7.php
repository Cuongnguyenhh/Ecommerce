<?php $__env->startSection('home_content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="<?php echo e(url('/')); ?>">Men (20)</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Women (20)</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Bags (20)</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Clothing (20)</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Shoes (20)</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Accessories (20)</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Kids (20)</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Kids (20)</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Kids (20)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="<?php echo e(url('/')); ?>">Louis Vuitton</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Chanel</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Hermes</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">Gucci</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="<?php echo e(url('/')); ?>">$0.00 - $50.00</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">$50.00 - $100.00</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">$100.00 - $150.00</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">$150.00 - $200.00</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">$200.00 - $250.00</a></li>
                                                    <li><a href="<?php echo e(url('/')); ?>">250.00+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                <label for="xs">xs
                                                    <input type="radio" id="xs">
                                                </label>
                                                <label for="sm">s
                                                    <input type="radio" id="sm">
                                                </label>
                                                <label for="md">m
                                                    <input type="radio" id="md">
                                                </label>
                                                <label for="xl">xl
                                                    <input type="radio" id="xl">
                                                </label>
                                                <label for="2xl">2xl
                                                    <input type="radio" id="2xl">
                                                </label>
                                                <label for="xxl">xxl
                                                    <input type="radio" id="xxl">
                                                </label>
                                                <label for="3xl">3xl
                                                    <input type="radio" id="3xl">
                                                </label>
                                                <label for="4xl">4xl
                                                    <input type="radio" id="4xl">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                    </div>
                                    <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__color">
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
                                                <label class="c-5" for="sp-5">
                                                    <input type="radio" id="sp-5">
                                                </label>
                                                <label class="c-6" for="sp-6">
                                                    <input type="radio" id="sp-6">
                                                </label>
                                                <label class="c-7" for="sp-7">
                                                    <input type="radio" id="sp-7">
                                                </label>
                                                <label class="c-8" for="sp-8">
                                                    <input type="radio" id="sp-8">
                                                </label>
                                                <label class="c-9" for="sp-9">
                                                    <input type="radio" id="sp-9">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                <a href="<?php echo e(url('/')); ?>">Product</a>
                                                <a href="<?php echo e(url('/')); ?>">Bags</a>
                                                <a href="<?php echo e(url('/')); ?>">Shoes</a>
                                                <a href="<?php echo e(url('/')); ?>">Fashio</a>
                                                <a href="<?php echo e(url('/')); ?>">Clothing</a>
                                                <a href="<?php echo e(url('/')); ?>">Hats</a>
                                                <a href="<?php echo e(url('/')); ?>">Accessories</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $imgproduct = '';
                            foreach ($productImages as $img){           
                                if($img->id_product == $product->product_id  ){
                                    $imgproduct = $img->link;
                                    
                                    break;
                                }
                            }
                              ?>
                                
                
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo e($imgproduct); ?>">
                                        <ul class="product__hover">
                                            <li><a href="<?php echo e(url('/')); ?>"><img src="img/icon/heart.png"
                                                        alt=""></a></li>
                                            <li><a href="<?php echo e(url('/')); ?>"><img src="img/icon/compare.png"
                                                        alt=""> <span>Compare</span></a>
                                            </li>
                                            <li><a href="<?php echo e(asset(url('/productdetail?id=' . $product->product_id))); ?>"><img src="img/icon/search.png" alt=""></a></li>

                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><?php echo e($product->product_name); ?></h6>
                                        <a href="<?php echo e(url('/')); ?>" class="add-cart">+ Add To Cart</a>
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5>$67.24</h5>
                                        <div class="product__color__select">
                                            <label for="pc-4">
                                                <input type="radio" id="pc-4">
                                            </label>
                                            <label class="active black" for="pc-5">
                                                <input type="radio" id="pc-5">
                                            </label>
                                            <label class="grey" for="pc-6">
                                                <input type="radio" id="pc-6">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo e($allProducts->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Economerce/resources/views/pages/store.blade.php ENDPATH**/ ?>