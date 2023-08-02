<?php $__env->startSection('dashboard_content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Authors table</h6>
        </div>
        
        <div class="form-group">
          <button class="btn btn-success" type="submit" style="margin-left: 10px; margin-right: 10px; float: right;"><a style="color: white;" href="<?php echo e(route('products.create')); ?>">Add new product</a></button>

          <input type="text" id="searchInput" style="width: 400px; float: right;border: 1px solid black" class="form-control" placeholder="Search by author name or category">
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0" style="max-height: 400px; overflow-y: auto;">
            <table class="table align-items-center mb-0" id="authorsTable">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time Create</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <?php $imgProduct = null; $count = 1; ?>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                if($img->id_product == $product->product_id){
                   $imgProduct = $img->link;
                  break;
                }
                ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/frontend/img/product/<?php echo e($imgProduct); ?>" class="avatar avatar-sm me-3" alt="user1">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm"><?php echo e($product->product_name); ?></h6>
                        <p class="text-xs text-secondary mb-0"><?php echo e($product->category_name); ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">$<?php echo e($product->price); ?></p>
                  </td>
                  <?php if($product->product_visible == 0): ?>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Selling</span>
                  </td>
                <?php elseif($product->product_visible == 1): ?>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-danger">Stop</span>
                  </td>
                <?php endif; ?>
                            
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold"><?php echo e($product->created_at); ?></span>
                  </td>
                  <td class="align-middle">
                    <a href="<?php echo e(route('products.edit', $product->product_id)); ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                      data-original-title="Edit user">Edit</a>
                  </td>
                </tr>
                <?php $count++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
      
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart"></i> by <a href="https://www.creative-tim.com"
              class="font-weight-bold" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- JavaScript to handle search functionality -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const authorsTable = document.getElementById("authorsTable").getElementsByTagName("tbody")[0].getElementsByTagName("tr");

    searchInput.addEventListener("input", function() {
      const query = searchInput.value.trim().toLowerCase();

      for (let i = 0; i < authorsTable.length; i++) {
        const authorName = authorsTable[i].getElementsByTagName("h6")[0].innerText.toLowerCase();
        const categoryName = authorsTable[i].getElementsByTagName("p")[0].innerText.toLowerCase();

        if (authorName.includes(query) || categoryName.includes(query)) {
          authorsTable[i].style.display = "table-row";
        } else {
          authorsTable[i].style.display = "none";
        }
      }
    });
  });
</script>

<?php $__env->stopSection(); ?>








<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Economerce/resources/views/dashboard_pages/products.blade.php ENDPATH**/ ?>