<div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="<?php echo e(route('index')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo_ab.png')); ?>" alt=""></a></div>
      <div class="dark-logo-wrapper"><a href="<?php echo e(route('index')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo_ab.png')); ?>" alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
    </div>
   
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li><span>Hai, <?php echo e(Auth::user()->name); ?></span></li>
        <li class="onhover-dropdown p-0">
          <button class="btn btn-primary-light" type="button"><a href="<?php echo e(route('logout')); ?>"><i data-feather="log-out"></i>Log out</button></a>
        </li>
      </ul>
    </div>
   
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\swi\resources\views/layouts/admin/partials/header.blade.php ENDPATH**/ ?>