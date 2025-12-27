<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">

        <!-- toggle sidebar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- logo bulat + tulisan -->
        <h1 class="navbar-brand navbar-brand-autodark text-center">
            <a href="{{ route('dashboard') }}">
                <span class="avatar avatar-md logo-avatar">
                    <img src="{{ asset('dist/static/logotheraart.png') }}" alt="Thera Art Logo">
                </span>
                <div class="logo-text mt-2">Thera Art Space</div>
            </a>
        </h1>

        <!-- nav untuk small screen -->
        <div class="navbar-nav flex-row d-lg-none">
            <div class="nav-item d-none d-lg-flex me-3">
                <div class="btn-list">
                    <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                        </svg>
                        Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                        </svg>
                        Sponsor
                    </a>
                </div>
            </div>
        </div>

        <!-- sidebar menu -->
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item @if (request()->routeIs('dashboard')) active @endif">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-home icon"></i>
                        </span>
                        <span class="nav-link-title">Home</span>
                    </a>
                </li>

                <span class="ms-3 text-white mt-3 mb-1">Master Data</span>
                <li class="nav-item @if (request()->routeIs('satuans.*')) active @endif">
                    <a class="nav-link" href="{{ route('satuans.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-box-padding icon"></i>
                        </span>
                        <span class="nav-link-title">Satuan</span>
                    </a>
                </li>

                <li class="nav-item @if (request()->routeIs('kategori.*')) active @endif">
                    <a class="nav-link" href="{{ route('kategori.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-category-2 icon"></i>
                        </span>
                        <span class="nav-link-title">Kategori</span>
                    </a>
                </li>

                <li class="nav-item @if (request()->routeIs('barang.index')) active @endif">
                    <a class="nav-link" href="{{ route('barang.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-notebook icon"></i>
                        </span>
                        <span class="nav-link-title">Barang</span>
                    </a>
                </li>

                <span class="ms-3 text-white mt-3 mb-1">Transaksi</span>
                <li class="nav-item @if (request()->routeIs('barang-masuk.*')) active @endif">
                    <a class="nav-link" href="{{ route('barang-masuk.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-transfer-in icon"></i>
                        </span>
                        <span class="nav-link-title">Barang Masuk</span>
                    </a>
                </li>

                <li class="nav-item @if (request()->routeIs('barang-keluar.*')) active @endif">
                    <a class="nav-link" href="{{ route('barang-keluar.index') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-transfer-out icon"></i>
                        </span>
                        <span class="nav-link-title">Barang Keluar</span>
                    </a>
                </li>

                <span class="ms-3 text-white mt-3 mb-1">Laporan</span>
                <li class="nav-item @if (request()->routeIs('barang-masuk.laporan')) active @endif">
                    <a class="nav-link" href="{{ route('barang-masuk.laporan') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-report-analytics icon"></i>
                        </span>
                        <span class="nav-link-title">Barang Masuk</span>
                    </a>
                </li>
                <li class="nav-item @if (request()->routeIs('barang-keluar.laporan')) active @endif">
                    <a class="nav-link" href="{{ route('barang-keluar.laporan') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-transfer-out icon"></i>
                        </span>
                        <span class="nav-link-title">Barang Keluar</span>
                    </a>
                </li>

                <li class="nav-item @if (request()->routeIs('barang.stok')) active @endif">
                    <a class="nav-link" href="{{ route('barang.stok') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-stack icon"></i>
                        </span>
                        <span class="nav-link-title">Stok Barang</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ============================== -->
    <!-- CSS SIDEBAR -->
    <!-- ============================== -->
    <style>
        /* Logo Bulat */
        .logo-avatar {
            width: 65px;
            height: 65px;
            border-radius: 50% !important;
            overflow: hidden;
        }
        .logo-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50% !important;
            display: block;
        }

        /* Tulisan di bawah logo */
        .logo-text {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
        }

        /* Light mode pink */
        aside.navbar {
            background-color: #f74f9d !important;
        }
        aside.navbar .nav-link,
        aside.navbar .nav-link:hover,
        aside.navbar .nav-link.active,
        aside.navbar .nav-link:focus {
            color: #fff !important;
        }
        aside.navbar .nav-link.active {
            background-color: #ff99c8 !important;
        }
        aside.navbar .nav-link:hover {
            background-color: #ffb8d0ff !important;
        }
        aside.navbar .nav-link-icon i,
        aside.navbar .nav-link-icon svg {
            color: #fff !important;
        }
        aside.navbar span.text-white {
            color: rgba(255, 255, 255, 0.8) !important;
        }

        aside.navbar .dropdown-menu {
            background-color: #e83e8c !important;
        }
        aside.navbar .dropdown-item {
            color: #fff !important;
        }
        aside.navbar .dropdown-item:hover {
            background-color: #f06292 !important;
        }

        /* Dark mode */
        [data-bs-theme="dark"] aside.navbar {
            background-color: #182433 !important;
        }
        [data-bs-theme="dark"] aside.navbar .nav-link.active {
            background-color: #333 !important;
        }
        [data-bs-theme="dark"] aside.navbar .nav-link:hover {
            background-color: #f74f9d !important;
        }
        [data-bs-theme="dark"] aside.navbar .dropdown-menu {
            background-color: #000 !important;
        }
        [data-bs-theme="dark"] aside.navbar .dropdown-item:hover {
            background-color: #505050ff !important;
        }
    </style>
</aside>