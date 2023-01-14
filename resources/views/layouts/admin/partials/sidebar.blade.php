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
                        <a class="nav-link menu-title {{ prefixActive('/dashboard') }}" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/dashboard') }};">
                            <li><a href="{{route('index')}}" class="{{routeActive('index')}}">Home</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>BPJS</span></a>
                        <ul class="nav-submenu menu-content" style="display:">
                            <li><a href="{{ route('bpjstk.index') }}" class="{{routeActive('bpjstk.index')}}">BPJS Ketenagakerjaan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Gaji</span></a>
                        <ul class="nav-submenu menu-content" style="display:">
                            <li><a href="{{ route('gaji.index') }}" class="{{routeActive('gaji.index')}}">Gaji Pegawai</a></li>
                        </ul>
                    </li>
                   
                    
                    
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Database</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                        <ul class="nav-submenu menu-content" style="display:">
                            <li><a href="{{ route('user.index') }}" class="{{routeActive('user.index')}}">Data User</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/database') }}" href="javascript:void(0)"><i data-feather="airplay"></i><span>Karyawan</span></a>
                        <ul class="nav-submenu menu-content"  style="display: {{ prefixBlock('/database') }};">
                            <li><a href="{{ route('karyawan.index') }}" class="{{routeActive('general-widget')}}">Karyawan</a></li>
                            <li><a href="" class="{{routeActive('general-widget')}}">Penjahit</a></li>
                            <li><a href="" class="{{routeActive('general-widget')}}">Subkon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/database') }}" href="javascript:void(0)"><i data-feather="airplay"></i><span>Konsumen</span></a>
                        <ul class="nav-submenu menu-content"  style="display: {{ prefixBlock('/database') }};">
                            <li><a href="{{ route('konsumen.index') }}" class="{{routeActive('general-widget')}}">Konsumen</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/database') }}" href="javascript:void(0)"><i data-feather="airplay"></i><span>Vendor</span></a>
                        <ul class="nav-submenu menu-content"  style="display: {{ prefixBlock('/database') }};"> 
                            <li><a href="{{ route('vendor.index') }}" class="{{routeActive('vendor.index')}}">Bahan</a></li>
                            <li><a href="{{ route('vendor.lainnya') }}" class="{{routeActive('vendor.lainnya')}}">Lainnya</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>BPJS</span></a>
                        <ul class="nav-submenu menu-content"  style="display: ">
                            <li><a href="{{ route('bpjstk.program') }}" class="{{routeActive('chart-widget')}}">BPJS Ketenagakerjaan</a></li>
                            <li><a href="{{ route('bpjs-kesehatan.jenis') }}" class="{{routeActive('chart-widget')}}">BPJS Kesehatan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/database') }}" href="javascript:void(0)"><i data-feather="airplay"></i><span>Daftar Harga</span></a>
                        <ul class="nav-submenu menu-content"  style="display: {{ prefixBlock('/database') }};">
                            <li><a href="" class="{{routeActive('general-widget')}}">Harga Material</a></li>
                            <li><a href="{{ route('chart-widget') }}" class="{{routeActive('chart-widget')}}">Harga Upah Jahit</a></li>
                            <li><a href="{{ route('chart-widget') }}" class="{{routeActive('chart-widget')}}">Harga Jahit Subkon</a></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/database') }}" href="javascript:void(0)"><i data-feather="airplay"></i><span>Daftar Akun</span></a>
                        <ul class="nav-submenu menu-content"  style="display: {{ prefixBlock('/database') }};">
                            <li><a href="{{ route('akun.index') }}" class="{{routeActive('akun.index')}}">Akun Email</a></li>
                            <li><a href="{{ route('akun.izin') }}" class="{{routeActive('akun.izin')}}">Akun Perizinan</a></li>
                            <li><a href="{{ route('akun.sosmed') }}" class="{{routeActive('akun.sosmed')}}">Akun Sosmed</a></li>
                            <li><a href="{{ route('akun.lainnya') }}" class="{{routeActive('akun.lainnya')}}">Akun Lainnya</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/database') }}" href="javascript:void(0)"><i data-feather="airplay"></i><span>Tata Cara</span></a>
                        <ul class="nav-submenu menu-content"  style="display: {{ prefixBlock('/database') }};">
                            <li><a href="{{ route('tatacara.index') }}" class="{{ route('tatacara.index') }}">Tata Cara</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
