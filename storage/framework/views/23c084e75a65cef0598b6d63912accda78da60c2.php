<?php $__env->startSection('home_content'); ?>
    <?php $user = Auth::user();?>

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
                <form action="<?php echo e(route('checkout.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input name="name" type="text" value="<?php echo e($user->name); ?>"
                                    class="checkout__input__add" required>

                            </div>

                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input name="addr" type="text" value="<?php echo e($user->user_adress); ?>"
                                    class="checkout__input__add" required>

                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input name="phone" value="<?php echo e($user->phone); ?>" type="number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input name="email" value="<?php echo e($user->email); ?>" type="text" required>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <?php
                                        $total = 0;
                                        $price = 0;
                                    ?>
                                    <?php if($cart != null): ?>
                                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $price = $item['price'] * $item['quantity']; ?>
                                            <li><?php echo e($item['name']); ?> <span>$<?php echo e($price); ?></span></li>
                                            <?php $total += $price; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Total <span><?php echo e($total); ?><span></li>
                                </ul>

                                <button  type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form style="float: right;" action="<?php echo e(route('vnpay.load')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button style="width: 360px;" name="redirect" class="btn btn-primary" type="submit">VnPay</button>
                </form>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Economerce/resources/views/pages/checkout.blade.php ENDPATH**/ ?>