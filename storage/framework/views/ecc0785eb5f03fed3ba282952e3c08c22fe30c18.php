<!-- Phần hiển thị giỏ hàng -->

<?php $__env->startSection('home_content'); ?>
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
                                <?php $imgProduct = null; $total = 0; ?>
                                <?php if($cart): ?>
                                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productId => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                if($img->id_product == $product['product_id']){
                                    $imgProduct = $img->link;
                                        break;
                                }
                                ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img style="width: 90px; height: 90px;" src="img/product/<?php echo e($imgProduct); ?>" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?php echo e($product['name']); ?></h6>
                                            <h5>$<?php echo e($product['price']); ?></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <span><?php echo e($product['quantity']); ?></span>
                                        </div>
                                    </td>
                                    <td class="cart__price"><?php echo e($product['quantity'] * $product['price']); ?></td>
                                    <td class="cart__close">
                                            <form action="<?php echo e(route('cart.remove', ['id' => $productId])); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-primary w-10 h-10" type="submit">Remove</button>
                                            </form>
                                    </i></td>
                                </tr>
                                <?php 
                                    $total += $product['quantity'] * $product['price'];
                                    
                                 ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="<?php echo e(url('/')); ?>">Continue Shopping</a>
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
                            <li>Total <span>$ <?php echo e($total); ?></span></li>
                        </ul>
                        <a href="<?php echo e(route('checkout.index')); ?>" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<!-- Phần hiển thị giỏ hàng -->

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Economerce/resources/views/pages/cart.blade.php ENDPATH**/ ?>