<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">
                {{ config('app.name') }}
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">.ID</a>
        </div>
        <ul class="sidebar-menu mb-5">
            {{-- Admin & Pustakawan --}}
                <li class="menu-header">Dashboard</li>
                <li class="dropdown active">
                    <a href="#" class="nav-link">
                        <i class="fas fa-fire"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-header">Perpustakaan</li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span>Koleksi Buku</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-paperclip"></i>
                        <span>Kategori Buku</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Peminjaman</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-comments"></i>
                        <span>Ulasan Buku</span>
                    </a>
                </li>
                <li class="menu-header">Pengaturan</li>
                {{-- Only Admin --}}
                    <li class="dropdown">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Kelola Pengguna</span>
                        </a>
                    </li>
                {{-- End Only Admin --}}
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i>
                        <span>Profil</span>
                    </a>
                </li>
            {{-- End Admin & Pustakawan --}}
            {{-- Pembaca --}}
                <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-fire"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-header">Perpustakaan</li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span>Pustaka</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bookmark"></i>
                        <span>Koleksi</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Peminjaman</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-comment"></i>
                        <span>Ulasan</span>
                    </a>
                </li>
                <li class="menu-header">Pengaturan</li>
                <li class="dropdown">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i>
                        <span>Profil</span>
                    </a>
                </li>
            {{-- End Pembaca --}}
        </ul>
    </aside>
</div>
