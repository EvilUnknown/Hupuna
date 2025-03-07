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
        <div class="container header-top py-4">
            <div class="row justify-content-between align-items-center">
                
                <div class="col-2 col-sm-3 col-md-3 icon-menu-mobile d-none">
                    <button class="toggle-btn bg-transparent text-white border-0 cursor-pointer"
                        onclick="open_menu_mobile()">
                        <img src="icons/main-menu-icon.svg" width="25">
                    </button>
                </div> 
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 logo-mobile">
                    <img src="images/logo.png" alt="Logo trang chủ" width="100">
                </div>
                <form
                    class="col-lg-6 border-0 search-box bg-white d-flex align-items-center justify-content-between">
                    <input type="text" class="w-100 border-0 bg-transparent py-2"
                        placeholder="Tìm kiếm từ khóa, thông tin, công dụng...">
                    <img src="icons/search-icon.svg" alt="Nút search" width="25">
                </form>
                <div class="col-4 col-sm-3 col-md-3 col-lg-4 d-flex justify-content-end">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-12 col-lg-5">
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
                            <a class="cart text-white cursor-pointer border-0">
                                <img src="icons/cart-icon.svg" alt="icon giỏ hàng" width="25">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <!-- Main Menu -->
        <nav class="menu container d-flex justify-content-between align-items-center">
            <div class="menu-wrap">
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
            
            <button
                class="menu-btn fw-500 p-2 fs-16 text-black border-0 cursor-pointer d-flex align-items-center justify-content-center gap-3"><img
                    src="icons/video-library-icon.svg" width="20" class="pb-1"> VIDEO NỔI
                BẬT</button>
       
        </nav>
    </header>

    <section class="menu-m d-none position-fixed top-0 bottom-0 start-0 bg-white opacity-0 visibility-hidden overflow-hidden">
        <div class="logo">
            <a href="" title="Logo">
                <img src="images/logo-menu-mobile.png" alt="">
            </a>
        </div>
        <div class="menu-m-wrap">
            <ul class="menu-level1">
                <li>
                    <div class="formSearch">
                        <form action="https://hupuna.com/" class="form-search position-relative">
                            <input type="text" name="s" placeholder="Bạn tìm gì..." class="d-block w-100 fs-16 fw-400 bg-white">
                            <!-- <input type="text" hidden="" name="post_type" value="product" class="hidden"> -->
                            <button class="position-absolute end-0 translate-middle-y bg-transparent">
                                <img class="icon-search" src="images/search.svg" alt="Search">
                            </button>
                        </form>
                    </div>
                </li>
                <li>
                    <a href="https://hupuna.com/ve-chung-toi/" title="Về chúng tôi">
                        Về chúng tôi
                    </a>
                </li>
                <li>
                    <a href="https://hupuna.com/cua-hang/" title="Sản phẩm">
                        Sản phẩm
                    </a>
                    <span class="next-menu-level1 position-absolute top-50 end-0 translate-middle-y d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="images/Chervon-right.svg" alt="Chervon">
                    </span>
                    <ul class="menu-level2">
                        <li>
                            <a href="javascript:;" title="Tiêu đề" class="back-menu-level1">
                                <img src="images/Chervon-right.svg" alt="Chervon">
                                Sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="https://hupuna.com/hop-carton/" title="Hộp carton">
                                Hộp carton
                            </a>
                            <span class="next-menu-level2 position-absolute top-50 end-0 translate-middle-y d-flex justify-content-center align-items-center cursor-pointer">
                                <img src="images/Chervon-right.svg" alt="Chervon">
                            </span>
                            <ul class="menu-level3">
                                <li>
                                    <a href="javascript:;" title="Tiêu đề" class="back-menu-level2">
                                        <img src="images/Chervon-right.svg" alt="Chervon">
                                        Hộp carton
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/hop-carton/" title="Hàng có sẵn">
                                        Hàng có sẵn
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/san-xuat-hop-carton-so-luong-lon/" title="Sản xuất theo yêu cầu">
                                        Sản xuất theo yêu cầu
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://hupuna.com/hop-nap-gai/" title="Hộp nắp gài">
                                Hộp nắp gài
                            </a>
                        </li>
                        <li>
                            <a href="https://hupuna.com/hop-carton-chuyen-nha/" title="Hộp carton chuyển nhà">
                                Hộp carton chuyển nhà
                            </a>
                        </li>
                        <li>
                            <a href="https://hupuna.com/hop-in-offset/" title="Hộp in offset">
                                Hộp in offset
                            </a>
                            <span class="next-menu-level2 position-absolute top-50 end-0 translate-middle-y d-flex justify-content-center align-items-center cursor-pointer">
                                <img src="images/Chervon-right.svg" alt="Chervon">
                            </span>
                            <ul class="menu-level3">
                                <li>
                                    <a href="javascript:;" title="Tiêu đề" class="back-menu-level2">
                                        <img src="images/Chervon-right.svg" alt="Chervon">
                                        Hộp in offset
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/hop-dung-tra/" title="Hộp giấy đựng trà">
                                        Hộp giấy đựng trà
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/hop-banh-trung-thu/" title="Hộp đựng bánh trung thu">
                                        Hộp đựng bánh trung thu
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/thung-carton-hang-gia-dung/" title="Thùng carton hàng gia dụng">
                                        Thùng carton hàng gia dụng
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/thung-carton-dung-nong-san/" title="Thùng carton đựng nông sản">
                                        Thùng carton đựng nông sản
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://hupuna.com/tui-giay/" title="Túi giấy">
                                Túi giấy
                            </a>
                            <span class="next-menu-level2 position-absolute top-50 end-0 translate-middle-y d-flex justify-content-center align-items-center cursor-pointer">
                                <img src="images/Chervon-right.svg" alt="Chervon">
                            </span>
                            <ul class="menu-level3">
                                <li>
                                    <a href="javascript:;" title="Tiêu đề" class="back-menu-level2">
                                        <img src="images/Chervon-right.svg" alt="Chervon">
                                        Túi giấy
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/tui-giay-kraft-co-san/" title="Túi giấy Kraft có sẵn">
                                        Túi giấy Kraft có sẵn
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/hop-banh-trung-thu/" title="Túi giấy SX theo yêu cầu">
                                        Túi giấy SX theo yêu cầu
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://hupuna.com/bang-dinh/" title="Băng dính">
                                Băng dính
                            </a>
                            <span class="next-menu-level2 position-absolute top-50 end-0 translate-middle-y d-flex justify-content-center align-items-center cursor-pointer">
                                <img src="images/Chervon-right.svg" alt="Chervon">
                            </span>
                            <ul class="menu-level3">
                                <li>
                                    <a href="javascript:;" title="Tiêu đề" class="back-menu-level2">
                                        <img src="images/Chervon-right.svg" alt="Chervon">
                                        Băng dính
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/bang-dinh/" title="Hàng có sẵn">
                                        Hàng có sẵn
                                    </a>
                                </li>
                                <li>
                                    <a href="https://hupuna.com/san-xuat-bang-dinh-so-luong-lon/" title="Sản xuất theo yêu cầu">
                                        Sản xuất theo yêu cầu
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://hupuna.com/mang-pe/" title="Màng PE - Màng chít">
                                Màng PE - Màng chít
                            </a>
                        </li>
                        <li>
                            <a href="https://hupuna.com/xop-foam/" title="Xốp Foam chống sốc">
                                Xốp Foam chống sốc
                            </a>
                        </li>
                        <li>
                            <a href="https://hupuna.com/bong-khi/" title="Xốp khí - Bóng khí">
                                Xốp khí - Bóng khí
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://hupuna.com/bo-suu-tap/" title="Bộ sưu tập">
                        Bộ sưu tập
                    </a>
                </li>
                <li>
                    <a href="https://hupuna.com/ho-so-nang-luc/" title="Hồ sơ năng lực">
                        Hồ sơ năng lực
                    </a>
                </li>
                <li>
                    <a href="https://hupuna.com/tin-tuc-va-su-kien/" title="Tin tức">
                        Tin tức
                    </a>
                    <span class="next-menu-level2 position-absolute top-50 end-0 translate-middle-y d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="images/Chervon-right.svg" alt="Chervon">
                    </span>
                    <ul class="menu-level3">
                        <li>
                            <a href="javascript:;" title="Tiêu đề" class="back-menu-level2">
                                <img src="images/Chervon-right.svg" alt="Chervon">
                                Tin tức
                            </a>
                        </li>
                        <li>
                            <a href="https://hupuna.com/kien-thuc-bao-bi-giay/" title="Kiến thức bao bì giấy">
                                Kiến thức bao bì giấy
                            </a>
                        </li>
                        <li>
                            <a href="https://hupuna.com/tin-noi-bo/" title="Tin nội bộ">
                                Tin nội bộ
                            </a>
                        </li>
                        <li>
                            <a href="https://hupuna.com/tin-tuyen-dung/" title="Tin tuyển dụng">
                                Tin tuyển dụng
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://hupuna.com/lien-he/" title="Liên hệ">
                        Liên hệ
                    </a>
                </li>
            </ul>
        </div>

        <div class="social-icons position-absolute start-50 translate-middle-x w-100 d-flex justify-content-center">
            <a href="http://m.me/100069245741636" target="_blank">
                <img src="icons/messenger-icon-footer.png" width="30">
            </a>
            <a href="mailto:Ceohupuna@gmail.com">
                <img src="icons/gmail-icon-footer.png" width="30">
            </a>
            <a href="tel:0889736889">
                <img src="icons/phone-icon-footer.png" width="30">
            </a>
            <a href="https://zalo.me/08897368889" target="_blank">
                <img src="icons/zalo-icon-footer.png" width="30">
            </a>
        </div>
    </section>

    <div class="overlay-menu-m position-fixed top-0 start-0 end-0 bottom-0 opacity-0 visibility-hidden" onclick="close_menu_mobile()"></div>
</body>
<script src="js/header.js"></script>

</html>