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

/* 5. Product Quick View Modal */
const productDatabase = {
    'potato-fresh': {
        title: 'Khoai Tây Tươi Nhập Khẩu & Nội Địa',
        category: 'Nông Sản Tươi',
        origin: 'Đà Lạt / Hà Lan / Úc',
        desc: 'Khoai tây củ to, vàng ươm, ruột đặc, độ ẩm tiêu chuẩn. Cung ứng số lượng lớn theo container lạnh cho nhà máy chiên, HORECA & siêu thị.',
        specs: [
            { label: 'Quy cách củ', val: 'Size 100g - 250g/củ' },
            { label: 'Quy cách đóng gói', val: 'Bao lưới 10kg, 20kg hoặc Jumbo 1 tấn' },
            { label: 'Nhiệt độ bảo quản', val: '4°C - 8°C (Chuỗi lạnh tiêu chuẩn)' },
            { label: 'Khả năng cung ứng', val: 'Lên đến 5,000 Tấn/Tháng' }
        ],
        img: 'assets/images/fresh_produce.png'
    },
    'onion-fresh': {
        title: 'Hành Tây Vàng & Đỏ Thương Hạng',
        category: 'Nông Sản Tươi',
        origin: 'Hà Lan / Ấn Độ / Việt Nam',
        desc: 'Hành tây vỏ mỏng khô, củ chắc, không dập nát, kháng thối hỏng cao. Thích hợp cho chế biến công nghiệp và chế biến thực phẩm.',
        specs: [
            { label: 'Quy cách củ', val: 'Đường kính 6 - 9 cm' },
            { label: 'Quy cách đóng gói', val: 'Túi lưới 10kg/20kg/25kg' },
            { label: 'Nhiệt độ bảo quản', val: '0°C - 4°C, độ ẩm 65%' },
            { label: 'Khả năng cung ứng', val: 'Lên đến 3,000 Tấn/Tháng' }
        ],
        img: 'assets/images/fresh_produce.png'
    },
    'cantaloupe-fruit': {
        title: 'Dưa Vàng Hoàng Kim Chuẩn VietGAP',
        category: 'Trái Cây',
        origin: 'Nông trại TGT / Bình Thuận',
        desc: 'Dưa vàng vỏ lưới đẹp mắt, vị ngọt thanh tự nhiên (Brix > 13°), giòn ngọt rụm. Chuyên cung cấp cho chuỗi siêu thị, cửa hàng trái cây & XNK.',
        specs: [
            { label: 'Trọng lượng củ/quả', val: '1.2kg - 2.2kg/quả' },
            { label: 'Độ ngọt (Brix)', val: '≥ 13° Brix' },
            { label: 'Đóng gói', val: 'Thùng carton 10kg có mút xốp chống dập' },
            { label: 'Chứng nhận', val: 'VietGAP, GlobalGAP' }
        ],
        img: 'assets/images/fresh_fruits.png'
    },
    'french-fries': {
        title: 'Khoai Tây Chiên Đông Lạnh Cắt Thẳng/Sóng',
        category: 'Nông Sản Chế Biến',
        origin: 'Bỉ / Hà Lan / Mỹ',
        desc: 'Khoai tây đông lạnh chiên giòn lâu, vàng đều, không ngấm dầu. Sản phẩm chủ lực cung ứng chuỗi nhà hàng, fastfood & HORECA toàn quốc.',
        specs: [
            { label: 'Quy cách cắt', val: '7mm / 9mm / 10mm (Straight Cut & Crinkle Cut)' },
            { label: 'Đóng gói', val: 'Túi 2.5kg x 4 túi/Thùng (10kg)' },
            { label: 'Bảo quản', val: '-18°C đông lạnh sâu' },
            { label: 'Hạn sử dụng', val: '24 tháng kể từ ngày sản xuất' }
        ],
        img: 'assets/images/processed_potatoes.png'
    },
    'peanuts-dried': {
        title: 'Lạc Nhân & Vừng Trắng/Đen Hạt Đều',
        category: 'Nông Sản Khô',
        origin: 'Việt Nam / Ấn Độ',
        desc: 'Lạc nhân hạt đều, khô kiệt, độ ẩm dưới 8%, không nấm mốc aflatoxin. Chuyên cung cấp cho nhà máy ép dầu và chế biến bánh kẹo.',
        specs: [
            { label: 'Tỷ lệ hạt lép/hỏng', val: '< 0.5%' },
            { label: 'Độ ẩm', val: '≤ 8%' },
            { label: 'Đóng gói', val: 'Bao PP/Jumbo 25kg/50kg/1000kg' },
            { label: 'Khả năng cung ứng', val: '1,500 Tấn/Tháng' }
        ],
        img: 'assets/images/fresh_produce.png'
    },
    'export-dragonfruit': {
        title: 'Nông Sản Việt Nam Xuất Khẩu (Thanh Long, Mango, Coffee)',
        category: 'Xuất Khẩu',
        origin: 'Việt Nam',
        desc: 'TGT kết nối nguồn hàng nông sản Việt Nam chất lượng cao đạt chuẩn xuất khẩu đi Trung Quốc, EU, Mỹ, Đông Nam Á.',
        specs: [
            { label: 'Tiêu chuẩn XNK', val: 'SPS, HACCP, ISO 22000, Phytosanitary' },
            { label: 'Phương thức giao hàng', val: 'FOB, CIF, CFR theo yêu cầu khách B2B' },
            { label: 'Quy cách', val: 'Thùng lạnh Reefer Container 20ft/40ft' },
            { label: 'Thanh toán', val: 'L/C, T/T linh hoạt' }
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
                        <div class="product-spec-item">
                            <label>${spec.label}:</label>
                            <span>${spec.val}</span>
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

/* 6. RFQ Quote Modal System */
function initRfqModal() {
    const rfqModal = document.getElementById('rfqModal');
    if (!rfqModal) return;

    const rfqBtns = document.querySelectorAll('.trigger-rfq-modal');
    const closeBtn = rfqModal.querySelector('.modal-close');

    rfqBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
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

/* 8. Form Handlers & Notifications */
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
                    input.style.borderColor = '#E2E8F0';
                }
            });

            if (valid) {
                showToast('Gửi yêu cầu báo giá thành công! Đội ngũ TGT TIMEX sẽ liên hệ lại với Quý khách trong vòng 15 phút.');
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
        font-family: 'Lexend', sans-serif;
        font-size: 0.875rem;
        font-weight: 600;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 280px;
        max-width: 420px;
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
