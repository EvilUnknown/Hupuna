<!DOCTYPE html>
<html lang="vi">

<head>
    <link rel="stylesheet" href="css/header.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>

<body>
    <header class="fs-12 text-dark">
        <!-- Header -->
        <div class="container py-2">
            <div class="row justify-content-between align-items-center">
                <div class="col-4 col-sm-3 col-lg-2">
                    <img src="images/logo.png" alt="Logo trang chủ" width="150">
                </div>

                <div
                    class="col-6 col-sm-10 w-100 border-0 search-box bg-white d-flex align-items-center justify-content-between">
                    <input type="text" class="w-100 border-0 bg-transparent py-2"
                        placeholder="Tìm kiếm từ khóa, thông tin, công dụng...">
                    <img src="icons/search-icon.svg" alt="Nút search" width="25">
                </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-2 d-flex justify-content-end">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-5 content-top-bar">
                            <a class="text-warning d-flex justify-content-end align-items-center" href="tel:0889736889">
                                <img src="icons/phone-icon.svg" alt="icon giỏ hàng" width="18">
                                <span class="ms-1 fs-15 fw-500">0889.736.889</span>
                            </a>
                        </div>
                        <div class="col-5 content-top-bar">
                            <a class="text-warning d-flex justify-content-end align-items-center" href="">
                                <img src="icons/lock-icon.svg" alt="icon giỏ hàng" width="18">
                                <span class="ms-1 fs-15 fw-500">Đăng Nhập</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-lg-2">
                            <button class="toggle-btn bg-transparent text-white border-0 cursor-pointer"
                                onclick="openSidebar()">
                                <img src="icons/main-menu-icon.svg" width="20">
                            </button>
                            <a class="cart text-white cursor-pointer border-0">
                                <img src="icons/cart-icon.svg" alt="icon giỏ hàng" width="25">
                            </a>
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
            <ul class="menu-mobi">
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
            <div class="row">
                <button
                    class="col-12 col-lg-12 col-md-8 col-sm-6 menu-btn fw-500 p-2 fs-16 text-white border-0 cursor-pointer d-flex align-items-center justify-content-center gap-3"><img
                        src="icons/video-library-icon.svg" width="20" class="pb-1"> VIDEO NỔI
                    BẬT</button>
            </div>
        </nav>
    </header>
</body>
<script src="js/header.js"></script>

</html>