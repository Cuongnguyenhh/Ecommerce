<?php $__env->startSection('dashboard_content'); ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Product</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="<?php echo e(route('products.update', ['id' =>$product->product_id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <!-- Thêm các trường chỉnh sửa ở đây -->
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" id="product_name" name="product_name" class="form-control" value="<?php echo e($product->product_name); ?>" required>
                        </div>

                        

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" class="form-control" value="<?php echo e($product->price); ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="product_visible">Product Category</label>
                            <select id="product_visible" name="category_id" class="form-control" required>
                                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_visible">Product Visible</label>
                            <select id="product_visible" name="product_visible" class="form-control" required>
                                <option value="0" <?php echo e($product->product_visible == 0 ? 'selected' : ''); ?>>Selling</option>
                                <option value="1" <?php echo e($product->product_visible == 1 ? 'selected' : ''); ?>>Stop</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control" value="<?php echo e($product->description); ?>" required>
                        </div>
                        

                        
       

                        <!-- Thêm các trường dữ liệu khác vào đây -->

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Economerce/resources/views/dashboard_pages/editProduct.blade.php ENDPATH**/ ?>