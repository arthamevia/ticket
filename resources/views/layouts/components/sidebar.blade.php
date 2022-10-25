<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-decoration-none">
        <img src="{{ asset('assets/dist/img/logo.webp') }}" alt="logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-Pink">T-Movies</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-decoration-none">T-Movies</a>
            </div>
        </div> -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/category" class="nav-link ">
                        {{-- <a href="/category" class="nav-link {{ $judul === 'category' ? 'active' : '' }}"> --}}
                        <i class="fas fa-user"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/movies" class="nav-link ">
                        {{-- <a href="/movies" class="nav-link {{ $judul === 'movies' ? 'active' : '' }}"> --}}
                        <i class="fas fa-film"></i>
                        <p>Movies</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kursi" class="nav-link ">
                        {{-- <a href="/kursi" class="nav-link {{ $judul === 'kursi' ? 'active' : '' }}"> --}}
                        <i class="fas fa-chair"></i>
                        <p>Kursi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/tiket" class="nav-link ">
                        {{-- <a href="/tiket" class="nav-link {{ $judul === 'tiket' ? 'active' : '' }}"> --}}
                        <i class="fas fa-film"></i>
                        <p>Tiket</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/jadwal" class="nav-link ">
                        {{-- <a href="/jadwal" class="nav-link {{ $judul === 'jadwal' ? 'active' : '' }}"> --}}
                        <i class="fas fa-calendar"></i>
                        <p>Jadwal Tayang</p>
                    </a>
                </li>
            </ul>
    
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <!-- <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/kategori*') ? 'active' : '' }}">
                    <a href="/admin/kategori" class="menu-link">
                        <i class="menu-icon tf-icons bi bi-bookmark-fill"></i>
                        <div data-i18n="Analytics">Data Kategori</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/sub_kategori*') ? 'active' : '' }}">
                    <a href="/admin/sub_kategori" class="menu-link">
                        <i class="menu-icon tf-icons bi bi-bookmarks-fill"></i>
                        <div data-i18n="Analytics">Data Sub Kategori</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/produk*') ? 'active' : '' }}">
                    <a href="/admin/produk" class="menu-link">
                        <i class="menu-icon tf-icons bi bi-bag-fill"></i>
                        <div data-i18n="Analytics">Data Produk</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/riwayat_produk*') ? 'active' : '' }}">
                    <a href="/admin/riwayat_produk" class="menu-link">
                        <i class="menu-icon tf-icons bi bi-calendar2-week-fill"></i>
                        <div data-i18n="Analytics">Riwayat Produk</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/voucher*') ? 'active' : '' }}">
                    <a href="/admin/voucher" class="menu-link">
                        <i class="menu-icon tf-icons bi bi-envelope-x-fill"></i>
                        <div data-i18n="Analytics">Data voucher</div>
                    </a>
                </li>
            </ul> -->
</aside>