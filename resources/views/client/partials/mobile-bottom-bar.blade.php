{{-- MOBILE STICKY BOTTOM BAR --}}
<div class="mobile-bottom-bar">
    @if(request()->routeIs('client.careers*'))
        <a href="tel:0921575866" class="mobile-bottom-btn mobile-btn-call">
            <i class="fas fa-phone-alt"></i> Đường dây nóng: 0921.575.866
        </a>
        <a href="https://zalo.me/0921575866" target="_blank" class="mobile-bottom-btn mobile-btn-zalo">
            <i class="fas fa-comment"></i> Chat Zalo Tuyển Dụng
        </a>
    @else
        <a href="tel:0329575866" class="mobile-bottom-btn mobile-btn-call">
            <i class="fas fa-phone-alt"></i> Đường dây nóng: 0329575866
        </a>
        <a href="https://zalo.me/0921575866" target="_blank" class="mobile-bottom-btn mobile-btn-zalo">
            <i class="fas fa-comment"></i> Chat Zalo B2B
        </a>
    @endif
</div>
