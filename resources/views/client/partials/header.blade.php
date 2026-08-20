{{-- HEADER NAV --}}
<header class="header-nav">
    <div class="container">
        <div class="nav-wrapper">
            <a href="{{ route('client.home') }}" class="brand-logo">
                <img src="{{ asset('client-assets/images/logo-tgt.png') }}" alt="TGT TIMEX Logo" class="brand-logo-img">
            </a>

            <nav class="nav-menu">
                <a href="{{ route('client.home') }}" class="nav-link {{ request()->routeIs('client.home') ? 'active' : '' }}">Trang chủ</a>
                <a href="{{ route('client.about') }}" class="nav-link {{ request()->routeIs('client.about') ? 'active' : '' }}">Về TGT</a>
                <a href="{{ route('client.products') }}" class="nav-link {{ request()->routeIs('client.products') ? 'active' : '' }}">Sản Phẩm Mũi Nhọn</a>
                <a href="{{ route('client.projects') }}" class="nav-link {{ request()->routeIs('client.projects') ? 'active' : '' }}">Năng Lực & Dự Án Thực Tế</a>
                <a href="{{ route('client.news') }}" class="nav-link {{ request()->routeIs('client.news') ? 'active' : '' }}">Báo Giá & Thị Trường</a>
                <a href="{{ route('client.careers') }}" class="nav-link {{ request()->routeIs('client.careers') ? 'active' : '' }}">Tuyển dụng</a>
                <div class="mobile-only-btn" style="margin-top:1.5rem; width:100%;">
                    <button class="btn btn-primary trigger-rfq-modal" style="width:100%; padding:0.85rem;">
                        <i class="fas fa-paper-plane"></i> Gửi Yêu Cầu Tìm Nguồn Hàng
                    </button>
                </div>
            </nav>

            <div class="nav-right-actions" style="display:flex; align-items:center; gap:0.75rem;">
                <button class="btn btn-primary btn-sm trigger-rfq-modal">
                    <i class="fas fa-paper-plane"></i> Gửi Yêu Cầu Tìm Nguồn Hàng
                </button>
                <button class="mobile-toggle" aria-label="Open Menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>
