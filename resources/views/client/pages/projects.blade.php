@extends('client.layouts.app')

@section('title', 'Năng Lực, Dự Án Thực Tế & Khách Hàng Tiêu Biểu | TGT TIMEX')
@section('meta_description', 'Minh chứng năng lực cung ứng thực tế của TGT TIMEX qua các hợp đồng và đối tác.')

@section('content')
<!-- PAGE TITLE BANNER -->
    <section class="hero-section" style="padding:3.5rem 0;">
        <div class="hero-bg-overlay" style="opacity:0.6;"></div>
        <div class="container" style="position:relative; z-index:2; text-align:center;">
            <span class="badge badge-orange mb-2">Hồ Sơ Năng Lực & Dự Án Thực Tế</span>
            <h1 style="font-size:2.25rem; color:#0F233D; font-weight:700;">DỰ ÁN & HỢP ĐỒNG CUNG ỨNG B2B THỰC TẾ</h1>
            <p style="color:#475569; max-width:700px; margin:0.5rem auto 0 auto;">Bằng chứng thực tế về sản lượng tấn/tháng, hợp đồng cung ứng định kỳ & khả năng tìm nguồn hàng theo quy cách của TGT TIMEX.</p>
        </div>
    </section>


    <!-- CASE STUDIES SECTION -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="section-header">
                <span class="sub-tag"><i class="fas fa-file-contract"></i> Dự Án Hợp Đồng Tiêu Biểu</span>
                <h2 class="section-title">KHÁCH HÀNG VÀ HỢP ĐỒNG TIÊU BIỂU</h2>
                <p class="section-subtitle">Chất lượng nguồn hàng & tiến độ được chứng minh qua các lô hàng thực tế đã bàn giao.</p>
            </div>

            <div class="case-study-grid">
                <!-- Case 1 -->
                <div class="case-study-card">
                    <div class="case-study-content">
                        <span class="case-study-badge">KHÁCH HÀNG ĐẠI LÝ #01</span>
                        <h3 class="case-study-title">CUNG ỨNG 28 TẤN KHOAI TÂY HÀ LAN CHO ĐẠI LÝ MIỀN BẮC</h3>
                        <p style="font-size:0.875rem; color:#64748B; margin-bottom:1rem;">Bàn giao container lạnh tận kho đại lý tại Hà Nội trong 3 ngày, bảo đảm củ không dập mầm.</p>
                        
                        <div class="case-study-specs">
                            <div class="case-study-spec-row"><label>SẢN PHẨM:</label> <span>Khoai Tây Tươi Hà Lan</span></div>
                            <div class="case-study-spec-row"><label>KHỐI LƯỢNG:</label> <span>28 Tấn (1 Container 40ft)</span></div>
                            <div class="case-study-spec-row"><label>QUY CÁCH:</label> <span>Bao lưới 10kg (Cỡ củ 55-65mm)</span></div>
                            <div class="case-study-spec-row"><label>ĐIỂM GIAO:</label> <span>Kho Đại lý Hà Nội</span></div>
                        </div>

                        <span class="badge badge-green" style="align-self:flex-start;"><i class="fas fa-check"></i> Đã Giao Hàng & Đầy Đủ VAT</span>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="case-study-card">
                    <div class="case-study-content">
                        <span class="case-study-badge">KHÁCH HÀNG NHÀ MÁY #02</span>
                        <h3 class="case-study-title">TÌM NGUỒN 100 TẤN KHOAI TÂY THEO QUY CÁCH NHÀ MÁY CHIP</h3>
                        <p style="font-size:0.875rem; color:#64748B; margin-bottom:1rem;">Khách hàng cần chỉ tiêu độ khô ≥ 20% và độ đường thấp. TGT săn tìm nguồn Hà Lan & kiểm định mẫu đạt chuẩn.</p>
                        
                        <div class="case-study-specs">
                            <div class="case-study-spec-row"><label>NHU CẦU:</label> <span>100 Tấn / Tháng</span></div>
                            <div class="case-study-spec-row"><label>KÍCH CỠ CỦ:</label> <span>60-70mm (Ruột vàng đặc)</span></div>
                            <div class="case-study-spec-row"><label>CHỨNG TỪ:</label> <span>Phytosanitary & Test LAS-NN</span></div>
                            <div class="case-study-spec-row"><label>THỜI HẠN:</label> <span>Hợp đồng 6 Tháng</span></div>
                        </div>

                        <span class="badge badge-green" style="align-self:flex-start;"><i class="fas fa-check"></i> Hợp Đồng Định Kỳ Hàng Tháng</span>
                    </div>
                </div>

                <!-- Case 3 -->
                <div class="case-study-card">
                    <div class="case-study-content">
                        <span class="case-study-badge">KHÁCH HÀNG BẾP ĂN CÔNG NGHIỆP #03</span>
                        <h3 class="case-study-title">CUNG ỨNG HÀNH TÂY & TỎI SỈ CHO CHUỖI BẾP ĂN CÔNG NGHIỆP</h3>
                        <p style="font-size:0.875rem; color:#64748B; margin-bottom:1rem;">Cung cấp hàng tuần 15 tấn hành tây Hà Lan & tỏi mẩy cho chuỗi bếp ăn công nghiệp tại Bắc Ninh, Thái Nguyên.</p>
                        
                        <div class="case-study-specs">
                            <div class="case-study-spec-row"><label>SẢN PHẨM:</label> <span>Hành tây & Tỏi trắng</span></div>
                            <div class="case-study-spec-row"><label>SẢN LƯỢNG:</label> <span>15 Tấn / Tuần</span></div>
                            <div class="case-study-spec-row"><label>ĐÓNG GÓI:</label> <span>Bao lưới 20kg dán tem ATTP</span></div>
                            <div class="case-study-spec-row"><label>VẬN CHUYỂN:</label> <span>Xe tải lạnh chuyên dụng</span></div>
                        </div>

                        <span class="badge badge-green" style="align-self:flex-start;"><i class="fas fa-check"></i> Giao Tận Kho Bếp Hàng Tuần</span>
                    </div>
                </div>

                <!-- Case 4 -->
                <div class="case-study-card">
                    <div class="case-study-content">
                        <span class="case-study-badge">KHÁCH HÀNG NHÀ HÀNG & KHÁCH SẠN #04</span>
                        <h3 class="case-study-title">PHÂN PHỐI 500 THÙNG KHOAI TÂY CHIÊN ĐÔNG LẠNH CHO NHÀ HÀNG & KHÁCH SẠN</h3>
                        <p style="font-size:0.875rem; color:#64748B; margin-bottom:1rem;">Giao xe lạnh chuyên dụng bảo quản -18°C cho hệ thống nhà hàng & chuỗi ẩm thực tại Hà Nội.</p>
                        
                        <div class="case-study-specs">
                            <div class="case-study-spec-row"><label>SẢN PHẨM:</label> <span>Khoai tây chiên đông lạnh Bỉ</span></div>
                            <div class="case-study-spec-row"><label>SỐ LƯỢNG:</label> <span>500 Thùng (5 Tấn)</span></div>
                            <div class="case-study-spec-row"><label>BẢO QUẢN:</label> <span>-18°C đông lạnh sâu</span></div>
                            <div class="case-study-spec-row"><label>GIAO HÀNG:</label> <span>24/7 Theo yêu cầu</span></div>
                        </div>

                        <span class="badge badge-green" style="align-self:flex-start;"><i class="fas fa-check"></i> Cấp Hàng Định Kỳ Chuỗi F&B</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
