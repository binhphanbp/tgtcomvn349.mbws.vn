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
                <!-- Article 1 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="{{ asset(\'client-assets/images/fresh_produce.png\') }}" alt="Bảng giá khoai tây Hà Lan">
                    </div>
                    <div class="news-content">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> 14/08/2026</span>
                        <h3 class="news-title">BẢNG GIÁ KHOAI TÂY NHẬP KHẨU HÀ LAN & TRUNG QUỐC THÁNG 8/2026</h3>
                        <p class="news-snippet">Cập nhật biến động giá khoai tây tươi nhập khẩu theo container lạnh cho nhà máy chip, bếp ăn công nghiệp & đại lý miền Bắc...</p>
                        <div style="margin-top:1rem;">
                            <a href="javascript:void(0);" class="service-link trigger-rfq-modal">Nhận Bảng Giá Chi Tiết <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="{{ asset(\'client-assets/images/cold_storage_warehouse.png\') }}" alt="Nguồn khoai tây cho nhà máy">
                    </div>
                    <div class="news-content">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> 10/08/2026</span>
                        <h3 class="news-title">TIÊU CHUẨN KHOAI TÂY CUNG ỨNG CHO NHÀ MÁY SẢN XUẤT KHOAI TÂY SẤY & SNACK</h3>
                        <p class="news-snippet">Phân tích các chỉ tiêu kỹ thuật bắt buộc: Độ khô tiêu chuẩn ≥ 20%, hàm lượng đường khử thấp, Kích cỡ củ đồng đều 55-65mm...</p>
                        <div style="margin-top:1rem;">
                            <a href="javascript:void(0);" class="service-link trigger-rfq-modal">Tư Vấn Quy Cách <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="{{ asset(\'client-assets/images/fresh_produce.png\') }}" alt="Báo giá tỏi hành tây">
                    </div>
                    <div class="news-content">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> 05/08/2026</span>
                        <h3 class="news-title">NGUỒN CUNG HÀNH TÂY & TỎI SỈ SỐ LƯỢNG LỚN TỚI KHO DOANH NGHIỆP</h3>
                        <p class="news-snippet">Giải pháp cung ứng hợp đồng dài hạn hành tây Hà Lan, tỏi tép to cho chuỗi bếp ăn KCN & nhà máy gia vị thực phẩm toàn quốc...</p>
                        <div style="margin-top:1rem;">
                            <a href="javascript:void(0);" class="service-link trigger-rfq-modal">Nhận Báo Giá Sỉ <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
