@extends('client.layouts.app')

@section('title', 'Danh Mục Nông Sản B2B - Khoai Tây, Hành Tây, Tỏi, Nông Sản Khô & Chế Biến | TGT TIMEX')
@section('meta_description', 'Đầy đủ thông tin sản phẩm, tiêu chuẩn kỹ thuật, quy cách đóng gói và hồ sơ kiểm định nông sản B2B.')

@section('content')
<!-- PAGE TITLE BANNER -->
    <section class="hero-section" style="padding:3.5rem 0; background-color:#0A192F;">
        <div class="hero-bg-overlay" style="opacity:0.4;"></div>
        <div class="container" style="position:relative; z-index:2; text-align:center;">
            <span class="badge badge-orange mb-2">Bảng Tiêu Chuẩn Kỹ Thuật Nông Sản</span>
            <h1 style="font-size:2.25rem; color:white;">DANH MỤC NÔNG SẢN & THÔNG TIN CUNG ỨNG</h1>
            <p style="color:#E2E8F0; max-width:720px; margin:0.5rem auto 0 auto;">Đầy đủ thông tin về nông sản tươi, nông sản khô, nông sản chế biến, xuất khẩu & hàng hóa xuất nhập khẩu theo quy cách B2B.</p>
        </div>
    </section>

    <!-- PRODUCT CATALOG WITH DATA SHEETS -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">Tất cả sản phẩm</button>
                <button class="filter-btn" data-filter="nong-san-tuoi">Nông sản tươi</button>
                <button class="filter-btn" data-filter="nong-san-kho">Nông sản khô</button>
                <button class="filter-btn" data-filter="nong-san-che-bien">Nông sản chế biến</button>
                <button class="filter-btn" data-filter="nong-san-xuat-khau">Nông sản xuất khẩu</button>
                <button class="filter-btn" data-filter="hang-hoa-xnk">Hàng hóa XNK</button>
            </div>

            <div class="product-grid">
                <!-- Product 1: Khoai tây tươi -->
                <div class="product-card" data-category="nong-san-tuoi">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/fresh_produce.png\') }}" alt="Khoai tây tươi Hà Lan">
                        <span class="product-category-tag">Nông Sản Tươi</span>
                        <span class="product-origin-badge">Hà Lan / TQ</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">KHOAI TÂY TƯƠI HÀ LAN / TRUNG QUỐC (TIÊU CHUẨN KỸ THUẬT)</h3>
                        <p class="product-desc">Khoai tây củ to vàng ươm, ruột đặc, độ khô ≥ 20%. Cung ứng sỉ số lượng lớn theo container lạnh cho nhà máy chế biến & đại lý.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>KÍCH CỠ CỦ:</label> <span>45-55 / 55-65 / 65-75mm</span></div>
                            <div class="product-spec-item"><label>ĐỘ KHÔ:</label> <span>≥ 20% (Chuẩn nhà máy)</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Bao lưới 10kg/20kg/Jumbo 1T</span></div>
                            <div class="product-spec-item"><label>BẢO QUẢN:</label> <span>4°C - 8°C (Kho lạnh 24/7)</span></div>
                            <div class="product-spec-item"><label>ĐẶT HÀNG TỐI THIỂU:</label> <span>5 Tấn / 1 Container 40ft</span></div>
                            <div class="product-spec-item"><label>NĂNG LỰC:</label> <span>5,000 Tấn / Tháng</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="potato-fresh" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Khoai Tây Tươi Hà Lan / Trung Quốc" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2: Hành tây -->
                <div class="product-card" data-category="nong-san-tuoi">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/fresh_produce.png\') }}" alt="Hành tây vàng">
                        <span class="product-category-tag">Nông Sản Tươi</span>
                        <span class="product-origin-badge">Hà Lan / Ấn Độ</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">HÀNH TÂY VÀNG & ĐỎ NHẬP KHẨU HÀ LAN / ẤN ĐỘ</h3>
                        <p class="product-desc">Hành tây củ chắc đét, vỏ mỏng khô giòn, độ cay nồng chuẩn. Nguồn cung sỉ định kỳ cho bếp ăn công nghiệp & gia vị.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>ĐƯỜNG KÍNH:</label> <span>Size 6cm - 9cm</span></div>
                            <div class="product-spec-item"><label>ĐỘ ẨM VỎ:</label> <span>≤ 12% (Vỏ khô giòn)</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Túi lưới 10kg/20kg/25kg</span></div>
                            <div class="product-spec-item"><label>BẢO QUẢN:</label> <span>0°C - 4°C, Độ ẩm 65%</span></div>
                            <div class="product-spec-item"><label>ĐẶT HÀNG TỐI THIỂU:</label> <span>3 Tấn / 1 Container</span></div>
                            <div class="product-spec-item"><label>NĂNG LỰC:</label> <span>3,000 Tấn / Tháng</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="onion-fresh" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Hành Tây Vàng Hà Lan / Ấn Độ" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3: Tỏi & Gừng -->
                <div class="product-card" data-category="nong-san-tuoi">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/fresh_produce.png\') }}" alt="Tỏi trắng nhập khẩu">
                        <span class="product-category-tag">Nông Sản Tươi</span>
                        <span class="product-origin-badge">TQ / Myanmar</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">TỎI TRẮNG & GỪNG GIÀ NHẬP KHẨU SỈ</h3>
                        <p class="product-desc">Tỏi tép to mẩy đanh, gừng già cay nồng không mốc hỏng. Cung cấp sỉ theo container lạnh cho nhà máy chế biến gia vị & chợ đầu mối.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>SIZE TÉP:</label> <span>4.5cm - 6.0cm</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Thùng 10kg / Bao 20kg</span></div>
                            <div class="product-spec-item"><label>BẢO QUẢN:</label> <span>-1°C - 1°C kho lạnh khô</span></div>
                            <div class="product-spec-item"><label>ĐẶT HÀNG TỐI THIỂU:</label> <span>2 Tấn</span></div>
                            <div class="product-spec-item"><label>NĂNG LỰC:</label> <span>2,000 Tấn / Tháng</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="garlic-fresh" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Tỏi Trắng & Gừng Già Sỉ" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4: Dưa vàng & Trái cây -->
                <div class="product-card" data-category="nong-san-tuoi">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/fresh_fruits.png\') }}" alt="Dưa vàng hoàng kim">
                        <span class="product-category-tag">Nông Sản Tươi & Trái Cây</span>
                        <span class="product-origin-badge">VietGAP / NK</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">DƯA VÀNG HOÀNG KIM & TRÁI CÂY THEO MÙA</h3>
                        <p class="product-desc">Dưa vàng vỏ lưới đẹp mắt, thịt giòn ngọt rụm (Brix > 13°). Cùng táo, lê, nho nhập khẩu theo mùa cho siêu thị, bếp ăn cao cấp & xuất khẩu.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>TRỌNG LƯỢNG:</label> <span>1.2kg - 2.2kg / quả</span></div>
                            <div class="product-spec-item"><label>ĐỘ NGỌT:</label> <span>≥ 13° Brix</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Thùng carton 10kg</span></div>
                            <div class="product-spec-item"><label>CHỨNG NHẬN:</label> <span>VietGAP, GlobalGAP</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="cantaloupe-fruit" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Dưa Vàng & Trái Cây Nhập Khẩu" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 5: Vừng Mè Khô -->
                <div class="product-card" data-category="nong-san-kho">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/dried_produce.png\') }}" alt="Vừng đen vừng trắng vừng vàng">
                        <span class="product-category-tag">Nông Sản Khô</span>
                        <span class="product-origin-badge">Myanmar / VN</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">VỪNG ĐEN, VỪNG TRẮNG & VỪNG VÀNG NGUYÊN CHẤT</h3>
                        <p class="product-desc">Vừng hạt mẩy đanh, hàm lượng dầu cao (≥ 48-52%), làm sạch bụi cát và khử khuẩn. Cung ứng cho nhà máy dầu, bánh kẹo & gia vị.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>CHỦNG LOẠI:</label> <span>Vừng đen / Vừng trắng / Vừng vàng</span></div>
                            <div class="product-spec-item"><label>ĐỘ TINH KHIẾT:</label> <span>≥ 99.0% (Lọc sạch tạp chất)</span></div>
                            <div class="product-spec-item"><label>ĐỘ ẨM:</label> <span>≤ 8.0%</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Bao PP / Kraft 25kg, 50kg</span></div>
                            <div class="product-spec-item"><label>ĐẶT HÀNG TỐI THIỂU:</label> <span>1 Tấn</span></div>
                            <div class="product-spec-item"><label>NĂNG LỰC:</label> <span>1,000 Tấn / Tháng</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="sesame-seeds" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Vừng Đen, Vừng Trắng & Vừng Vàng" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 6: Đậu Xanh -->
                <div class="product-card" data-category="nong-san-kho">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/dried_produce.png\') }}" alt="Đậu xanh nguyên hạt và tách vỏ">
                        <span class="product-category-tag">Nông Sản Khô</span>
                        <span class="product-origin-badge">Myanmar / VN</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">ĐẬU XANH NGUYÊN HẠT / TÁCH ĐÔI BỎ VỎ / VỠ ĐÔI</h3>
                        <p class="product-desc">Đậu xanh hạt mẩy bóng tròn, không mọt, không nấm mốc. Đầy đủ 3 quy cách: nguyên vỏ, tách đôi xát vỏ làm bánh chè & tách đôi nguyên vỏ.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>QUY CÁCH:</label> <span>Nguyên hạt / Tách vỏ / Vỡ đôi</span></div>
                            <div class="product-spec-item"><label>ĐỘ ẨM:</label> <span>≤ 12.5%</span></div>
                            <div class="product-spec-item"><label>TẠP CHẤT:</label> <span>≤ 0.2%</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Bao PP 25kg, 50kg có lót PE</span></div>
                            <div class="product-spec-item"><label>ĐẶT HÀNG TỐI THIỂU:</label> <span>2 Tấn</span></div>
                            <div class="product-spec-item"><label>NĂNG LỰC:</label> <span>1,500 Tấn / Tháng</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="mung-beans" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Đậu Xanh Nguyên Hạt & Tách Vỏ" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 7: Đậu Tương -->
                <div class="product-card" data-category="nong-san-kho">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/dried_produce.png\') }}" alt="Đậu tương hạt chất lượng cao">
                        <span class="product-category-tag">Nông Sản Khô</span>
                        <span class="product-origin-badge">Việt Nam / NK</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">ĐẬU TƯƠNG (ĐẬU NÀNH HẠT CHẤT LƯỢNG CAO)</h3>
                        <p class="product-desc">Hạt đậu tương vàng óng, đồng đều, hàm lượng protein ≥ 36%. Nguồn nguyên liệu cho nhà máy sữa hạt, đậu phụ, thực phẩm chay & TACN.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>PROTEIN:</label> <span>≥ 36.0% - 38.0%</span></div>
                            <div class="product-spec-item"><label>HÀM LƯỢNG DẦU:</label> <span>≥ 18.0%</span></div>
                            <div class="product-spec-item"><label>ĐỘ ẨM:</label> <span>≤ 13.0%</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Bao 25kg, 50kg hoặc Jumbo 1T</span></div>
                            <div class="product-spec-item"><label>ĐẶT HÀNG TỐI THIỂU:</label> <span>3 Tấn / 1 Container</span></div>
                            <div class="product-spec-item"><label>NĂNG LỰC:</label> <span>2,000 Tấn / Tháng</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="soybeans" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Đậu Tương / Đậu Nành Hạt" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 8: Mộc Nhĩ & Nấm Hương -->
                <div class="product-card" data-category="nong-san-kho">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/dried_produce.png\') }}" alt="Mộc nhĩ nấm hương khô">
                        <span class="product-category-tag">Nông Sản Khô</span>
                        <span class="product-origin-badge">Việt Nam / NK</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">MỘC NHĨ & NẤM HƯƠNG KHÔ CHỌN LỌC</h3>
                        <p class="product-desc">Mộc nhĩ cánh dày nở giòn sần sật, nấm hương cánh tròn thơm đậm, sấy khô tiệt trùng. Phục vụ chuỗi nhà hàng, bếp ăn & xưởng chế biến thực phẩm.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>CHỦNG LOẠI:</label> <span>Mộc nhĩ đen cánh dày / Nấm hương</span></div>
                            <div class="product-spec-item"><label>ĐỘ ẨM:</label> <span>≤ 12.0%</span></div>
                            <div class="product-spec-item"><label>QUY CÁCH:</label> <span>Cắt chân sạch sẽ, không vụn nát</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Thùng carton 10kg, 20kg / Túi hút chân không</span></div>
                            <div class="product-spec-item"><label>HẠN DÙNG:</label> <span>24 tháng</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="dried-mushrooms" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Mộc Nhĩ & Nấm Hương Khô" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 9: Đường tinh luyện -->
                <div class="product-card" data-category="nong-san-kho">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/dried_produce.png\') }}" alt="Đường tinh luyện thương mại B2B">
                        <span class="product-category-tag">Nông Sản Khô & Gia Vị</span>
                        <span class="product-origin-badge">Việt Nam / NK</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">ĐƯỜNG TINH LUYỆN THƯƠNG MẠI B2B</h3>
                        <p class="product-desc">Đường cát trắng tinh luyện tiêu chuẩn công nghiệp, độ tinh khiết Pol ≥ 99.8%, hạt mịn tan nhanh cho nhà máy thực phẩm, bánh kẹo & đồ uống.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>ĐỘ POL:</label> <span>≥ 99.80°Z (Tinh khiết)</span></div>
                            <div class="product-spec-item"><label>ĐỘ ẨM:</label> <span>≤ 0.05%</span></div>
                            <div class="product-spec-item"><label>MÀU SẮC:</label> <span>Trắng tinh (≤ 30 ICUMSA)</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Bao PP/PE 50kg có tem nhãn ATTP</span></div>
                            <div class="product-spec-item"><label>ĐẶT HÀNG TỐI THIỂU:</label> <span>5 Tấn</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="refined-sugar" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Đường Tinh Luyện B2B" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 10: Khoai tây chiên đông lạnh -->
                <div class="product-card" data-category="nong-san-che-bien">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/processed_potatoes.png\') }}" alt="Khoai tây đông lạnh">
                        <span class="product-category-tag">Nông Sản Chế Biến</span>
                        <span class="product-origin-badge">Bỉ / Hà Lan</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">KHOAI TÂY CHIÊN ĐÔNG LẠNH CẮT THẲNG / SÓNG</h3>
                        <p class="product-desc">Nhập khẩu Bỉ/Hà Lan, độ giòn chuẩn, không hút dầu. Cung ứng số lượng lớn theo xe lạnh cho chuỗi nhà hàng, khách sạn & F&B.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>QUY CÁCH SỢI:</label> <span>7mm / 9mm / 10mm</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Túi 2.5kg x 4 túi/Thùng</span></div>
                            <div class="product-spec-item"><label>BẢO QUẢN:</label> <span>-18°C đông lạnh sâu</span></div>
                            <div class="product-spec-item"><label>ĐẶT HÀNG TỐI THIỂU:</label> <span>50 Thùng (Giao xe lạnh)</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="french-fries" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Khoai Tây Chiên Đông Lạnh" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 11: Khoai tây múi cau & nghiền -->
                <div class="product-card" data-category="nong-san-che-bien">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/processed_potatoes.png\') }}" alt="Khoai tây múi cau">
                        <span class="product-category-tag">Nông Sản Chế Biến</span>
                        <span class="product-origin-badge">Bỉ / Hà Lan</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">KHOAI TÂY MÚI CAU (WEDGES) & KHOAI TÂY NGHIỀN</h3>
                        <p class="product-desc">Khoai tây múi cau tẩm gia vị và khoai tây nghiền cấp đông IQF. Chuyên dùng cho chuỗi Steakhouse, BBQ, Fastfood & buffet khách sạn.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>QUY CÁCH:</label> <span>Múi cau có vỏ / Khoai nghiền</span></div>
                            <div class="product-spec-item"><label>ĐÓNG GÓI:</label> <span>Túi 2.5kg x 4 túi/Thùng (10kg)</span></div>
                            <div class="product-spec-item"><label>BẢO QUẢN:</label> <span>-18°C đông lạnh</span></div>
                            <div class="product-spec-item"><label>CHỨNG NHẬN:</label> <span>HACCP, ISO 22000, BRC</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="potato-wedges" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Khoai Tây Múi Cau & Nghiền" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 12: Nông sản xuất khẩu -->
                <div class="product-card" data-category="nong-san-xuat-khau">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/fresh_fruits.png\') }}" alt="Nông sản xuất khẩu Việt Nam">
                        <span class="product-category-tag">Nông Sản Xuất Khẩu</span>
                        <span class="product-origin-badge">Việt Nam</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">NÔNG SẢN VIỆT NAM XUẤT KHẨU (TỎI, GỪNG, DƯA LƯỚI, NÔNG SẢN KHÔ)</h3>
                        <p class="product-desc">Đóng gói và xuất khẩu nông sản Việt Nam đạt chuẩn VietGAP/GlobalGAP: Tỏi, gừng già, dưa vàng, đậu hạt & vừng mè chọn lọc theo container.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>THỊ TRƯỜNG:</label> <span>Châu Á, Trung Đông, EU, Mỹ</span></div>
                            <div class="product-spec-item"><label>CHỨNG TỪ:</label> <span>Phytosanitary, CO Form E/AK/EUR1</span></div>
                            <div class="product-spec-item"><label>QUY CÁCH:</label> <span>Thùng carton / Pallet xuất khẩu</span></div>
                            <div class="product-spec-item"><label>ĐIỀU KIỆN:</label> <span>FOB Cảng VN, CIF Cảng đến</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="vn-export-produce" style="flex:1;">
                                <i class="fas fa-file-lines"></i> Xem Thông Số
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Nông Sản Việt Nam Xuất Khẩu" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> Báo Giá
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 13: Hàng Hóa XNK & Tìm Nguồn -->
                <div class="product-card" data-category="hang-hoa-xnk">
                    <div class="product-img-wrapper">
                        <img src="{{ asset(\'client-assets/images/cold_storage_warehouse.png\') }}" alt="Tìm Nguồn Hàng Nông Sản">
                        <span class="product-category-tag">Hàng Hóa XNK</span>
                        <span class="product-origin-badge">Toàn Cầu</span>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">HÀNG HÓA XNK & DỊCH VỤ TÌM NGUỒN THEO YÊU CẦU</h3>
                        <p class="product-desc">TGT nhận săn tìm nguồn hàng nông sản tươi & nông sản khô từ Bỉ, Hà Lan, Ấn Độ, Trung Quốc, Myanmar, lấy mẫu test kiểm định & cung ứng theo quy cách riêng.</p>
                        
                        <div class="product-specs-list">
                            <div class="product-spec-item"><label>PHẠM VI TÌM KIẾM:</label> <span>Bỉ, Hà Lan, Ấn Độ, TQ, Myanmar...</span></div>
                            <div class="product-spec-item"><label>TIÊU CHUẨN:</label> <span>HACCP, ISO 22000, VietGAP</span></div>
                            <div class="product-spec-item"><label>QUY TRÌNH:</label> <span>Gửi mẫu → Hợp đồng → Giao</span></div>
                            <div class="product-spec-item"><label>GIAO HÀNG:</label> <span>FOB, CIF, CFR, DDP tận kho</span></div>
                        </div>

                        <div class="product-actions">
                            <button class="btn btn-outline-navy btn-sm btn-quickview" data-product="sourcing-b2b" style="flex:1;">
                                <i class="fas fa-file-lines"></i> XEM QUY TRÌNH
                            </button>
                            <button class="btn btn-primary btn-sm trigger-rfq-modal" data-product-name="Tìm Nguồn Nông Sản Theo Yêu Cầu" style="flex:1;">
                                <i class="fas fa-paper-plane"></i> BÁO GIÁ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
