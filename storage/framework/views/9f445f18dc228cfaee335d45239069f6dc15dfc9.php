<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <?php echo e($breadcrumb_title ?? ''); ?>

          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
              <?php echo e($slot ?? ''); ?>

          </ol>
        </div>
        <div class="col-lg-6">
          <!-- Bookmark Start-->
          <div class="bookmark">
          
          </div>
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\abdibusana\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>