{{-- MOBILE STICKY BOTTOM BAR --}}
<div class="mobile-bottom-bar">
    @if(request()->routeIs('client.careers*'))
        <a href="tel:0921575866" class="mobile-bottom-btn mobile-btn-call">
            <i class="fas fa-phone-alt"></i> <span>Gọi Hotline</span>
        </a>
        <a href="https://zalo.me/0921575866" target="_blank" class="mobile-bottom-btn mobile-btn-zalo">
            <i class="fas fa-comment-dots"></i> <span>Zalo Tuyển Dụng</span>
        </a>
    @else
        <a href="tel:0329575866" class="mobile-bottom-btn mobile-btn-call">
            <i class="fas fa-phone-alt"></i> <span>Gọi Hotline</span>
        </a>
        <a href="https://zalo.me/0921575866" target="_blank" class="mobile-bottom-btn mobile-btn-zalo">
            <i class="fas fa-comment-dots"></i> <span>Chat Zalo B2B</span>
        </a>
    @endif
</div>
