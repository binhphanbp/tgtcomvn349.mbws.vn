/* ==========================================================================
   TGT TIMEX - B2B Import & Export Trade JS Architecture
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileMenu();
    initBackToTop();
    initProductFilter();
    initProductModal();
    initRfqModal();
    initStatsCounter();
    initFormHandlers();
});

/* 1. Header Sticky Effect */
function initHeaderScroll() {
    const header = document.querySelector('.header-nav');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

/* 2. Mobile Drawer Navigation */
function initMobileMenu() {
    const toggleBtn = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');
    if (!toggleBtn || !navMenu) return;

    toggleBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = navMenu.classList.contains('active');
        
        if (isOpen) {
            navMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
            toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
        } else {
            navMenu.classList.add('active');
            document.body.classList.add('menu-open');
            toggleBtn.innerHTML = '<i class="fas fa-xmark"></i>';
        }
    });

    // Close on link click
    navMenu.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
            toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
        });
    });

    // Close on click outside drawer
    document.addEventListener('click', (e) => {
        if (navMenu.classList.contains('active') && !navMenu.contains(e.target) && !toggleBtn.contains(e.target)) {
            navMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
            toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
        }
    });
}

/* 3. Back to Top Button Logic */
function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (!backToTopBtn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 280) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    backToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/* 4. Product Filtering System */
function initProductFilter() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    if (!filterBtns.length || !productCards.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            productCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

/* 5. Product Quick View Modal & B2B Data Sheet */
const productDatabase = {
    'potato-fresh': {
        title: 'Khoai tây tươi Hà Lan / Úc / Đà Lạt (Tiêu Chuẩn Kỹ Thuật)',
        category: 'Sản phẩm mũi nhọn #1',
        origin: 'Hà Lan / Úc / Việt Nam',
        desc: 'Khoai tây củ to, vỏ mỏng vàng ươm, ruột đặc, độ khô tiêu chuẩn cao. Chuyên cung ứng số lượng lớn theo container lạnh cho nhà máy chế biến snack, bếp ăn công nghiệp, chợ đầu mối & chuỗi siêu thị.',
        specs: [
            { label: 'Quy cách kích cỡ', val: '45–55mm / 55–65mm / 65–75mm' },
            { label: 'Mục đích sử dụng', val: 'Nhà máy chế biến, Nhà hàng Khách sạn, Bán lẻ' },
            { label: 'Tỷ lệ củ lỗi / dập', val: '≤ 0.5% (Kiểm định LAS-NN)' },
            { label: 'Độ khô tiêu chuẩn', val: '≥ 20%' },
            { label: 'Nhiệt độ bảo quản', val: '4°C - 8°C (Chuỗi kho lạnh 24/7)' },
            { label: 'Quy cách đóng gói', val: 'Bao lưới 10kg, 20kg hoặc Bao Jumbo 1 Tấn' },
            { label: 'Đặt hàng tối thiểu', val: '5 Tấn (Nội địa) / 1 Container 40ft (XNK)' },
            { label: 'Năng lực cung ứng', val: '5,000 Tấn / Tháng' },
            { label: 'Chứng từ kèm theo', val: 'Phytosanitary, VietGAP, CQ, Kiểm nghiệm' }
        ],
        img: 'assets/images/fresh_produce.png'
    },
    'onion-fresh': {
        title: 'Hành tây vàng & đỏ nhập khẩu thương hạng',
        category: 'Nhóm củ thương mại #2',
        origin: 'Hà Lan / Ấn Độ / Việt Nam',
        desc: 'Hành tây vỏ khô mỏng, củ chắc đét, không dập thối, độ cay nồng chuẩn. Cung ứng hợp đồng định kỳ cho các nhà máy gia vị, bếp ăn công nghiệp & đại lý sỉ.',
        specs: [
            { label: 'Đường kính củ', val: 'Size 6cm – 9cm' },
            { label: 'Độ ẩm vỏ', val: '≤ 12% (Vỏ khô giòn)' },
            { label: 'Đóng gói', val: 'Bao túi lưới 10kg / 20kg / 25kg' },
            { label: 'Bảo quản', val: '0°C – 4°C, Độ ẩm 65%' },
            { label: 'Đặt hàng tối thiểu', val: '3 Tấn / 1 Container' },
            { label: 'Năng lực cung ứng', val: '3,000 Tấn / Tháng' },
            { label: 'Chứng từ', val: 'Phytosanitary, Hóa đơn VAT, CO' }
        ],
        img: 'assets/images/fresh_produce.png'
    },
    'garlic-fresh': {
        title: 'Tỏi trắng & tỏi tím nhập khẩu số lượng lớn',
        category: 'Nhóm củ thương mại #2',
        origin: 'Trung Quốc / Việt Nam',
        desc: 'Tỏi tép to đều, tép mẩy mặn mòi, vỏ sạch đẹp không nấm mốc. Nguồn cung ứng sỉ theo container cho nhà máy chế biến gia vị, chợ đầu mối toàn quốc.',
        specs: [
            { label: 'Kích cỡ tép tỏi', val: '4.5cm – 6.0cm' },
            { label: 'Đóng gói', val: 'Bao lưới 10kg, Thùng 10kg, Túi lưới 1kg' },
            { label: 'Điều kiện bảo quản', val: '-1°C – 1°C kho lạnh khô' },
            { label: 'Đặt hàng tối thiểu', val: '2 Tấn' },
            { label: 'Năng lực cung ứng', val: '2,000 Tấn / Tháng' },
            { label: 'Hóa đơn & Chứng từ', val: 'Hóa đơn VAT đầy đủ, Phytosanitary' }
        ],
        img: 'assets/images/fresh_produce.png'
    },
    'french-fries': {
        title: 'Khoai tây chiên đông lạnh cắt thẳng / sóng',
        category: 'Nông sản chế biến',
        origin: 'Bỉ / Hà Lan / Mỹ',
        desc: 'Khoai tây chiên đông lạnh nhập khẩu chuẩn Châu Âu, sợi giòn lâu, vàng ruộm, không ngấm dầu. Chủ lực cho các nhà hàng, khách sạn, chuỗi đồ ăn nhanh & dịch vụ ẩm thực.',
        specs: [
            { label: 'Quy cách cắt', val: '7mm / 9mm / 10mm (Thẳng & Sóng)' },
            { label: 'Quy cách đóng gói', val: 'Túi 2.5kg x 4 túi/Thùng (10kg)' },
            { label: 'Nhiệt độ bảo quản', val: '-18°C đông lạnh sâu' },
            { label: 'Hạn sử dụng', val: '24 tháng kể từ ngày sản xuất' },
            { label: 'Đặt hàng tối thiểu', val: '50 Thùng (Giao xe lạnh tận nơi)' }
        ],
        img: 'assets/images/processed_potatoes.png'
    },
    'cantaloupe-fruit': {
        title: 'Dưa vàng Hoàng Kim VietGAP chuyên siêu thị',
        category: 'Trái cây nhập & nội địa',
        origin: 'Nông trại TGT / Bình Thuận',
        desc: 'Dưa vàng vỏ lưới nổi đẹp mắt, thịt giòn ngọt rụm, độ ngọt Brix > 13°. Đạt tiêu chuẩn vào các chuỗi siêu thị lớn, nhà hàng cao cấp và xuất khẩu.',
        specs: [
            { label: 'Trọng lượng quả', val: '1.2kg – 2.2kg / quả' },
            { label: 'Độ ngọt (Brix)', val: '≥ 13° Brix' },
            { label: 'Đóng gói', val: 'Thùng carton 10kg có mút xốp định hình' },
            { label: 'Chứng nhận', val: 'VietGAP, GlobalGAP, Truy xuất QR' }
        ],
        img: 'assets/images/fresh_fruits.png'
    },
    'sourcing-b2b': {
        title: 'Dịch vụ tìm nguồn hàng & XNK nông sản theo yêu cầu',
        category: 'Năng lực khác biệt #3',
        origin: 'Toàn Cầu (EU, Úc, Ấn Độ, TQ...)',
        desc: 'TGT TIMEX nhận săn tìm, thẩm định vùng trồng & nhập khẩu/xuất khẩu mọi loại nông sản theo đúng quy cách, tiêu chuẩn kỹ thuật & tiến độ của doanh nghiệp.',
        specs: [
            { label: 'Phạm vi tìm kiếm', val: 'Nông sản củ, trái cây, gia vị, đông lạnh' },
            { label: 'Tiêu chuẩn đáp ứng', val: 'HACCP, ISO 22000, GlobalGAP, Organic' },
            { label: 'Quy trình hợp tác', val: 'Báo giá → Gửi mẫu → Kiểm định → Hợp đồng' },
            { label: 'Điều kiện giao nhận', val: 'FOB, CIF, CFR, DDP tận kho khách' }
        ],
        img: 'assets/images/cold_storage_warehouse.png'
    }
};

function initProductModal() {
    const modal = document.getElementById('productDetailModal');
    if (!modal) return;

    const closeBtn = modal.querySelector('.modal-close');
    const quickViewBtns = document.querySelectorAll('.btn-quickview');

    quickViewBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const prodKey = btn.getAttribute('data-product');
            const data = productDatabase[prodKey];

            if (data) {
                document.getElementById('modalProdTitle').innerText = data.title;
                document.getElementById('modalProdCategory').innerText = data.category;
                document.getElementById('modalProdOrigin').innerText = data.origin;
                document.getElementById('modalProdDesc').innerText = data.desc;
                document.getElementById('modalProdImg').src = data.img;

                const specsContainer = document.getElementById('modalProdSpecs');
                specsContainer.innerHTML = '';
                data.specs.forEach(spec => {
                    specsContainer.innerHTML += `
                        <div class="product-spec-item" style="border-bottom:1px dashed #E2E8F0; padding:0.4rem 0;">
                            <label style="color:#64748B; font-weight:500;">${spec.label}:</label>
                            <span style="color:#0F233D; font-weight:700;">${spec.val}</span>
                        </div>
                    `;
                });

                modal.classList.add('active');
            }
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('active');
        });
    }

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('active');
        }
    });
}

/* 6. RFQ Quote Modal System with Smart B2B Segmentation */
function initRfqModal() {
    const rfqModal = document.getElementById('rfqModal');
    if (!rfqModal) return;

    const rfqBtns = document.querySelectorAll('.trigger-rfq-modal');
    const closeBtn = rfqModal.querySelector('.modal-close');

    rfqBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const prodName = btn.getAttribute('data-product-name');
            if (prodName) {
                const noteTextarea = rfqModal.querySelector('textarea');
                if (noteTextarea) {
                    noteTextarea.value = `Yêu cầu báo giá cho sản phẩm: ${prodName}. `;
                }
            }
            rfqModal.classList.add('active');
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            rfqModal.classList.remove('active');
        });
    }

    rfqModal.addEventListener('click', (e) => {
        if (e.target === rfqModal) {
            rfqModal.classList.remove('active');
        }
    });
}

/* 7. Animated Stats Counter */
function initStatsCounter() {
    const statNumbers = document.querySelectorAll('.stat-number');
    if (!statNumbers.length) return;

    let animated = false;

    const checkScroll = () => {
        const statsBanner = document.querySelector('.stats-banner');
        if (!statsBanner) return;

        const rect = statsBanner.getBoundingClientRect();
        if (rect.top <= window.innerHeight && !animated) {
            animated = true;
            statNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-target') || '0', 10);
                const suffix = stat.getAttribute('data-suffix') || '';
                let current = 0;
                const increment = Math.ceil(target / 40);

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.innerHTML = `${current.toLocaleString()}${suffix}`;
                }, 40);
            });
        }
    };

    window.addEventListener('scroll', checkScroll);
    checkScroll();
}

/* 8. Form Handlers & Smart Lead Notification */
function initFormHandlers() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            let valid = true;
            const requiredInputs = form.querySelectorAll('[required]');
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.style.borderColor = '#EF4444';
                } else {
                    input.style.borderColor = '#CBD5E1';
                }
            });

            if (valid) {
                showToast('Gửi yêu cầu báo giá B2B thành công! Chuyên viên TGT TIMEX sẽ liên hệ lại với Quý khách trong vòng 15 phút.');
                form.reset();
                
                const rfqModal = document.getElementById('rfqModal');
                const prodModal = document.getElementById('productDetailModal');
                if (rfqModal) rfqModal.classList.remove('active');
                if (prodModal) prodModal.classList.remove('active');
            } else {
                showToast('Vui lòng điền đầy đủ các thông tin bắt buộc!', 'error');
            }
        });
    });
}

function showToast(message, type = 'success') {
    let toastContainer = document.querySelector('.toast-container');
    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.className = 'toast-container';
        toastContainer.style.cssText = `
            position: fixed;
            top: 24px;
            right: 24px;
            z-index: 3000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        `;
        document.body.appendChild(toastContainer);
    }

    const toast = document.createElement('div');
    const bgColor = type === 'success' ? '#10B981' : '#EF4444';
    toast.style.cssText = `
        background-color: ${bgColor};
        color: white;
        padding: 14px 20px;
        border-radius: 8px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 0.9rem;
        font-weight: 600;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 280px;
        max-width: 440px;
    `;

    toast.innerHTML = `
        <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
        <span>${message}</span>
    `;

    toastContainer.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(50px)';
        toast.style.transition = 'all 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 4500);
}
