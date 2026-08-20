{{-- RFQ MODAL WITH SMART B2B FIELDS --}}
<div class="modal-overlay" id="rfqModal">
    <div class="modal-card">
        <div class="modal-header">
            <div>
                <span class="badge badge-orange mb-1">Gửi Yêu Cầu Báo Giá B2B</span>
                <h3 style="font-size:1.35rem; color:#0F233D;">YÊU CẦU TÌM NGUỒN HÀNG & BÁO GIÁ NÔNG SẢN</h3>
            </div>
            <button class="modal-close"><i class="fas fa-xmark"></i></button>
        </div>
        <div class="modal-body">
            <form id="rfqForm" method="POST" action="{{ url('/api/public/contact') }}">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label>HỌ VÀ TÊN NGƯỜI LIÊN HỆ *</label>
                        <input type="text" name="name" class="form-control" placeholder="Nguyễn Văn A" required>
                    </div>
                    <div class="form-group">
                        <label>TÊN DOANH NGHIỆP / CƠ SỞ *</label>
                        <input type="text" class="form-control" placeholder="Công ty / Đại lý..." required>
                    </div>
                    <div class="form-group">
                        <label>SỐ ĐIỆN THOẠI / ZALO *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="09xxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label>THƯ ĐIỆN TỬ (EMAIL) NHẬN BÁO GIÁ *</label>
                        <input type="email" name="email" class="form-control" placeholder="email@domain.com" required>
                    </div>

                    <div class="form-group">
                        <label>MÔ HÌNH KINH DOANH?</label>
                        <select class="form-control">
                            <option value="nhamay">Nhà máy chế biến</option>
                            <option value="daily">Chợ đầu mối / Đại lý sỉ</option>
                            <option value="horeca">Nhà hàng, Khách sạn & Ẩm thực (HORECA)</option>
                            <option value="bepan">Bếp ăn công nghiệp</option>
                            <option value="sieuthi">Siêu thị / Bán lẻ</option>
                            <option value="xnk">Doanh nghiệp XNK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>THỜI GIAN CẦN GIAO HÀNG?</label>
                        <select class="form-control">
                            <option value="ngay">Ngay lập tức (1-3 ngày)</option>
                            <option value="tuan">Trong 1-7 ngày</option>
                            <option value="thang">Trong 7-30 ngày</option>
                            <option value="daihan">Hợp đồng dài hạn</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label>GHI CHÚ QUY CÁCH & SẢN LƯỢNG NÔNG SẢN</label>
                        <textarea name="message" class="form-control" placeholder="Ghi chú loại nông sản, kích cỡ củ, số lượng tấn/container cần..."></textarea>
                    </div>
                </div>
                <div style="margin-top:1.35rem; text-align:center;">
                    <button type="submit" class="btn btn-navy btn-lg" style="width:100%;">
                        <i class="fas fa-paper-plane"></i> Gửi Yêu Cầu Báo Giá Ngay
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- PRODUCT DETAIL DATA SHEET MODAL --}}
<div class="modal-overlay" id="productDetailModal">
    <div class="modal-card">
        <div class="modal-header">
            <div>
                <span class="badge badge-green mb-1" id="modalProdCategory">Bảng Tiêu Chuẩn Kỹ Thuật</span>
                <h3 style="font-size:1.35rem; color:#0F233D;" id="modalProdTitle">TÊN SẢN PHẨM</h3>
            </div>
            <button class="modal-close"><i class="fas fa-xmark"></i></button>
        </div>
        <div class="modal-body">
            <div style="display:grid; grid-template-columns: 1fr 1fr; gap:1.5rem; align-items:start;">
                <div>
                    <img id="modalProdImg" src="" alt="Hình ảnh sản phẩm tiêu chuẩn kỹ thuật TGT TIMEX" style="width:100%; border-radius:10px; border:1px solid #E2E8F0;">
                    <div style="margin-top:0.75rem; text-align:center;">
                        <span class="badge badge-navy">Xuất xứ: <strong id="modalProdOrigin">Hà Lan</strong></span>
                    </div>
                </div>
                <div>
                    <h4 style="font-size:1.05rem; color:#0F233D; margin-bottom:0.5rem;">MÔ TẢ SẢN PHẨM</h4>
                    <p style="font-size:0.9rem; color:#475569; line-height:1.6; margin-bottom:1rem;" id="modalProdDesc"></p>
                    
                    <h4 style="font-size:1.05rem; color:#0F233D; margin-bottom:0.5rem;">CHỈ TIÊU KỸ THUẬT NÔNG SẢN</h4>
                    <div id="modalProdSpecs" style="background:#F8FAFC; border:1px solid #F1F5F9; border-radius:8px; padding:0.75rem; font-size:0.875rem;"></div>
                </div>
            </div>

            <div style="margin-top:1.5rem; text-align:center; padding-top:1rem; border-top:1px solid #E2E8F0;">
                <button class="btn btn-primary btn-lg trigger-rfq-modal" style="width:100%;">
                    <i class="fas fa-paper-plane"></i> Nhận Báo Giá Ngay Cho Sản Phẩm Này
                </button>
            </div>
        </div>
    </div>
</div>
