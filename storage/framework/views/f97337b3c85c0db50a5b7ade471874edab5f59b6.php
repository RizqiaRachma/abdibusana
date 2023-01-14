<header class="main-nav">
    
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/dashboard')); ?>" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/dashboard')); ?>;">
                            <li><a href="<?php echo e(route('index')); ?>" class="<?php echo e(routeActive('index')); ?>">Home</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                        <ul class="nav-submenu menu-content" style="display:">
                            <li><a href="<?php echo e(route('user.index')); ?>" class="<?php echo e(routeActive('user.index')); ?>">Data User</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>BPJS</span></a>
                        <ul class="nav-submenu menu-content" style="display:">
                            <li><a href="<?php echo e(route('bpjstk.index')); ?>" class="<?php echo e(routeActive('bpjstk.index')); ?>">BPJS Ketenagakerjaan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Gaji</span></a>
                        <ul class="nav-submenu menu-content" style="display:">
                            <li><a href="<?php echo e(route('gaji.index')); ?>" class="<?php echo e(routeActive('gaji.index')); ?>">Gaji Pegawai</a></li>
                        </ul>
                    </li>
                   
                    
                    
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Database</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/database')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Karyawan</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/database')); ?>;">
                            <li><a href="<?php echo e(route('karyawan.index')); ?>" class="<?php echo e(routeActive('general-widget')); ?>">Karyawan</a></li>
                            <li><a href="" class="<?php echo e(routeActive('general-widget')); ?>">Penjahit</a></li>
                            <li><a href="" class="<?php echo e(routeActive('general-widget')); ?>">Subkon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/database')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Konsumen</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/database')); ?>;">
                            <li><a href="<?php echo e(route('konsumen.index')); ?>" class="<?php echo e(routeActive('general-widget')); ?>">Konsumen</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/database')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Vendor</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/database')); ?>;"> 
                            <li><a href="<?php echo e(route('vendor.index')); ?>" class="<?php echo e(routeActive('vendor.index')); ?>">Bahan</a></li>
                            <li><a href="<?php echo e(route('vendor.lainnya')); ?>" class="<?php echo e(routeActive('vendor.lainnya')); ?>">Lainnya</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>BPJS</span></a>
                        <ul class="nav-submenu menu-content"  style="display: ">
                            <li><a href="<?php echo e(route('bpjstk.program')); ?>" class="<?php echo e(routeActive('chart-widget')); ?>">BPJS Ketenagakerjaan</a></li>
                            <li><a href="<?php echo e(route('bpjs-kesehatan.jenis')); ?>" class="<?php echo e(routeActive('chart-widget')); ?>">BPJS Kesehatan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/database')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Daftar Harga</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/database')); ?>;">
                            <li><a href="" class="<?php echo e(routeActive('general-widget')); ?>">Harga Material</a></li>
                            <li><a href="<?php echo e(route('chart-widget')); ?>" class="<?php echo e(routeActive('chart-widget')); ?>">Harga Upah Jahit</a></li>
                            <li><a href="<?php echo e(route('chart-widget')); ?>" class="<?php echo e(routeActive('chart-widget')); ?>">Harga Jahit Subkon</a></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/database')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Daftar Akun</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/database')); ?>;">
                            <li><a href="<?php echo e(route('akun.index')); ?>" class="<?php echo e(routeActive('akun.index')); ?>">Akun Email</a></li>
                            <li><a href="<?php echo e(route('akun.izin')); ?>" class="<?php echo e(routeActive('akun.izin')); ?>">Akun Perizinan</a></li>
                            <li><a href="<?php echo e(route('akun.sosmed')); ?>" class="<?php echo e(routeActive('akun.sosmed')); ?>">Akun Sosmed</a></li>
                            <li><a href="<?php echo e(route('akun.lainnya')); ?>" class="<?php echo e(routeActive('akun.lainnya')); ?>">Akun Lainnya</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/database')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Tata Cara</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/database')); ?>;">
                            <li><a href="<?php echo e(route('tatacara.index')); ?>" class="<?php echo e(route('tatacara.index')); ?>">Tata Cara</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH D:\Xampp\htdocs\swi\resources\views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>