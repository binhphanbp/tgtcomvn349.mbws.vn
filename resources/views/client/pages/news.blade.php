@extends('client.layouts.app')

@section('title', 'Báo Giá, Thị Trường & Tin Tức Nông Sản | TGT TIMEX')
@section('meta_description', 'Cập nhật báo giá, biến động thị trường nông sản và tin tức từ TGT TIMEX.')

@section('content')
<!-- PAGE TITLE BANNER -->
    <section class="hero-section" style="padding:3.5rem 0; background-color:#0A192F;">
        <div class="hero-bg-overlay" style="opacity:0.4;"></div>
        <div class="container" style="position:relative; z-index:2; text-align:center;">
            <span class="badge badge-orange mb-2">Bảng Giá Nông Sản & Thông Tin Thị Trường</span>
            <h1 style="font-size:2.25rem; color:white;">BẢNG GIÁ NÔNG SẢN & TIN TỨC THỊ TRƯỜNG B2B</h1>
            <p style="color:#E2E8F0; max-width:700px; margin:0.5rem auto 0 auto;">Cập nhật thông tin giá khoai tây nhập khẩu, xu hướng biến động giá nông sản & bài viết giải pháp cho nhà máy, đại lý.</p>
        </div>
    </section>

    <!-- NEWS & SEO ARTICLES GRID -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-newspaper"></i> Giải Pháp & Báo Giá Thị Trường</span>
                <h2 class="section-title">BÀI VIẾT TƯ VẤN NGUỒN HÀNG & GIÁ SỈ NÔNG SẢN</h2>
                <p class="section-subtitle">Thông tin hữu ích giúp doanh nghiệp & nhà máy tối ưu chi phí nguyên liệu đầu vào.</p>
            </div>

            <div class="news-grid">
                @if(isset($posts) && $posts->isNotEmpty())
                    @foreach($posts as $post)
                        <div class="news-card">
                            <div class="news-img">
                                <img src="{{ $post->image_url ? asset($post->image_url) : asset('client-assets/images/fresh_produce.png') }}" alt="{{ $post->title }}">
                            </div>
                            <div class="news-content">
                                <span class="news-date">
                                    <i class="far fa-calendar-alt"></i> 
                                    {{ $post->published_at ? $post->published_at->format('d/m/Y') : $post->created_at->format('d/m/Y') }}
                                    @if($post->category)
                                        <span class="badge badge-green ms-2" style="font-size:0.75rem;">{{ $post->category->name }}</span>
                                    @endif
                                </span>
                                <h3 class="news-title">{{ $post->title }}</h3>
                                <p class="news-snippet">{{ $post->summary }}</p>
                                <div style="margin-top:1rem;">
                                    <a href="javascript:void(0);" class="service-link trigger-rfq-modal" data-product-name="{{ $post->title }}">
                                        Nhận Bảng Giá Chi Tiết <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center py-5" style="grid-column: 1 / -1;">
                        <i class="far fa-newspaper fa-3x text-muted mb-3"></i>
                        <p class="text-muted">Đang cập nhật bài viết mới. Vui lòng quay lại sau!</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
