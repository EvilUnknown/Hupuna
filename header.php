<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/EvilUnknown/Hupuna/css/header.css"> -->
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <header style="padding: 15px 0;">
        <!-- Header -->
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-2">
                    <img src="images/logo.png" alt="Logo trang chủ" width="150">
                </div>
                <div class="col-6 search-box d-flex align-items-center justify-content-center">
                    <input type="text" class="border-0 bg-transparent"
                        placeholder="Tìm kiếm từ khóa, thông tin, công dụng...">
                    <img src="icons/search-icon.svg" alt="Nút search" width="25">
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <div class="row justify-content-between align-items-center">
                        <div class="col content-top-bar">
                            <a class="text-warning d-flex justify-content-end align-items-center" href="tel:0889736889">
                                <img src="icons/phone-icon.svg" alt="icon giỏ hàng" width="18">
                                <span class="ms-1 fs-15 fw-bold">0889.736.889</span>
                            </a>
                        </div>
                        <div class="col content-top-bar">
                            <a class="text-warning d-flex justify-content-end align-items-center">
                                <img src="icons/lock-icon.svg" alt="icon giỏ hàng" width="18">
                                <span class="ms-1 fs-15 fw-bold">Đăng Nhập</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="cart">
                                <img src="icons/cart-icon.svg" alt="icon giỏ hàng" width="25">
                            </a>
                            <button class="toggle-btn" onclick="openSidebar()">
                                <img src="icons/main-menu-icon.svg" width="20">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <!-- Lớp phủ nền -->
        <div class="overlay" id="overlay" onclick="closeSidebar()"></div>
        <div class="sidebar" id="sidebar">
            <a href="" class="logo">
                <img src="images/logo.png" alt="Logo trang chủ" width="150">
            </a>
            <ul class="menu-mb">
                <!-- Cấp 1 -->
                <li>
                    <label for="menu1">Dịch vụ ▼</label>
                    <input type="checkbox" id="menu1">
                    <ul class="submenu">
                        <!-- Cấp 2 -->
                        <li>
                            <label for="menu2">Thiết kế ▼</label>
                            <input type="checkbox" id="menu2">
                            <ul class="submenu-level-2">
                                <li>Logo</li>
                                <li>Banner</li>
                                <li>Poster</li>
                            </ul>
                        </li>
                        <li>Marketing</li>
                    </ul>
                </li>
                <li>Trang chủ</li>
                <li>Liên hệ</li>
            </ul>
        </div>
        <!-- Main Menu -->
        <nav class="menu container d-flex justify-content-between align-items-center">
            <div>
                <ul>
                    <li>
                        <a href="#">
                            <img src="icons/main-menu-icon.svg" width="20">
                            DANH MỤC SẢN PHẨM
                        </a>
                        <ul>
                            <li>
                                <a href="#">HỘP CARTON SÓNG THÔNG DỤNG</a>
                                <ul>
                                    <li>Nội dung</li>
                                    <li>Nội dung</li>
                                    <li>Nội dung</li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">HỘP OFFSET MỀM CAO CẤP</a>
                                <ul>
                                    <li>adjalskdjla</li>
                                    <li>daksdjajda</li>
                                    <li>dalsjdalkd</li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">HỘP CARTON CỨNG CAO CẤP</a>
                                <ul>
                                    <li>adjalskdjla</li>
                                    <li>daksdjajda</li>
                                    <li>dalsjdalkd</li>
                                </ul>
                            </li>
                            <li><a href="#">SẢN PHẨM IN NHANH</a>
                                <ul>
                                    <li>adjalskdjla</li>
                                    <li>daksdjajda</li>
                                    <li>dalsjdalkd</li>
                                </ul>
                            </li>
                            <li><a href="#">KHAY ĐỊNH HÌNH</a>
                                <ul>
                                    <li>adjalskdjla</li>
                                    <li>daksdjajda</li>
                                    <li>dalsjdalkd</li>
                                </ul>
                            </li>
                            <li><a href="#">TÚI GIẤY</a>
                                <ul>
                                    <li>adjalskdjla</li>
                                    <li>daksdjajda</li>
                                    <li>dalsjdalkd</li>
                                </ul>
                            </li>
                            <li><a href="#">PHỤ KIỆN ĐÓNG HÀNG</a>
                                <ul>
                                    <li>adjalskdjla</li>
                                    <li>daksdjajda</li>
                                    <li>dalsjdalkd</li>
                                </ul>
                            </li>
                            <li><a href="#">XEM TẤT CẢ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="#">DỊCH VỤ IN ẤN<img src="icons/triangle-down-icon.svg" width="15"></a>
                        <ul>
                            <li><a href="#">In Hộp Giấy</a></li>
                            <li><a href="#">In Túi Giấy</a></li>
                            <li><a href="#">In Hộp Yến</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">VỀ CHÚNG TÔI<img src="icons/triangle-down-icon.svg" width="15"></a>
                        <ul>
                            <li>
                                <a href="#">GIỚI THIỆU</a>
                            </li>
                            <li>
                                <a href="#">HỒ SƠ NĂNG LỰC</a>
                            </li>
                            <li>
                                <a href="#">LỜI MỜI HỢP TÁC</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">BỘ SƯU TẬP</a></li>
                    <li>
                        <a href="#">MẠNG XÃ HỘI<img src="icons/triangle-down-icon.svg" width="15"></a>
                        <ul>
                            <li>
                                <a href="#">FACEBOOK</a>
                            </li>
                            <li>
                                <a href="#">ZALO</a>
                            </li>
                            <li>
                                <a href="#">TIKTOK</a>
                            </li>
                            <li>
                                <a href="#">INSTAGRAM</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">TIN TỨC</a></li>
                </ul>
            </div>
            <div>
                <button class="menu-btn"><img src="icons/video-library-icon.svg" width="20" class="pb-1"> VIDEO NỔI
                    BẬT</button>
            </div>
        </nav>
    </header>
</body>
<script src="js/header.js"></script>

</html>