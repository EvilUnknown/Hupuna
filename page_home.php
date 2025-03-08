<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/slick.css"/>

    <link rel="stylesheet" href="css/base-style.css">
    <link rel="stylesheet" href="css/page_home.css">

    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <script type="text/javascript" src="js/slick.min.js"></script>

    <title>Hupuna</title>

</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Banner    -->
    <section class="banner position-relative">
        <div class="item">
            <div class="wrap-img img-100">
                <img src="images/img_page_home_1.webp" alt="Banner">
            </div>
        </div>
        <div class="item">
            <div class="wrap-img img-100">
                <img src="images/img_page_home_2.jpg" alt="Banner">
            </div>
        </div>
    </section>
    <!-- End banner    -->

    <!-- Category   -->
    <?php 
        $category = array(
            '1' => array(
                'link' => '',
                'title' => 'Nông sản - OCOP',
                'image' => 'images/category1.png',
            ),
            '2' => array(
                'link' => '',
                'title' => 'Hộp giấy',
                'image' => 'images/category2.png',
            ),
            '3' => array(
                'link' => '',
                'title' => 'Hộp yến',
                'image' => 'images/category3.png',
            ),
            '4' => array(
                'link' => '',
                'title' => 'Hộp trụ tròn',
                'image' => 'images/category4.png',
            ),
            '5' => array(
                'link' => '',
                'title' => 'Hộp trà',
                'image' => 'images/category5.png',
            ),
            '6' => array(
                'link' => '',
                'title' => 'Hộp rượu',
                'image' => 'images/category6.png',
            ),
            '7' => array(
                'link' => '',
                'title' => 'Túi giấy',
                'image' => 'images/category7.png',
            ),
            '8' => array(
                'link' => '',
                'title' => 'Hộp bánh trung thu',
                'image' => 'images/category8.png',
            ),
            '9' => array(
                'link' => '',
                'title' => 'Xem thêm',
                'image' => 'images/see-category.svg',
            ),
        )
    ?>
    <section class="category">
        <div class="container">
            <div class="category-inner d-flex flex-wrap">
                <div class="item content px-2">
                    <h3 class="fs-18 fw-700">In ấn dễ dàng cùng</h3>
                    <h2 class="fs-30 fw-900">Hupuna</h2>
                    <h4 class="fs-14">Chất lượng hàng đầu, Công nghệ tiên phong, Dịch vụ chuyên nghiệp, In ấn mọi lúc mọi nơi là tiêu chí mà chúng tôi hướng tới.</h4>
                </div>
                <?php foreach($category as $v) { ?>
                    <div class="item px-2">
                        <a href="<?php echo $v['link']; ?>" title="<?php echo $v['title']; ?>" class="item-category d-flex flex-column justify-content-center align-items-center gap-3 text-second-color p-2 text-line-clamp-1 transition-03">
                            <img src="<?php echo $v['image']; ?>" alt="<?php echo $v['title']; ?>" class="object-fit-cover">
                            <span class="name fs-17 fw-600"><?php echo $v['title']; ?></span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End cateory     -->

    <!-- Design  -->
    <?php 
        $design = array(
            '1' => array(
                'link' => '',
                'title' => 'Ấn phẩm văn phòng',
                'image' => 'images/design_item_1.jpg',
                'quantity' => '195',
                'type' => 'Ấn phẩm văn phòng',
            ),
            '2' => array(
                'link' => '',
                'title' => 'Bộ ấn phẩm marketing',
                'image' => 'images/design_item_2.jpg',
                'quantity' => '100',
                'type' => 'Bộ ấn phẩm Marketing',
            ),
            '3' => array(
                'link' => '',
                'title' => 'Thiết kế Catalogue',
                'image' => 'images/design_item_3.jpg',
                'quantity' => '8',
                'type' => 'Thiết kế Catalogue',
            ),
            '4' => array(
                'link' => '',
                'title' => 'Bộ nhận diện thương hiệu',
                'image' => 'images/design_item_4.jpg',
                'quantity' => '112',
                'type' => 'Bộ nhận diện thương hiệu',
            ),
        )
    ?>
    <section class="design space-section">
        <div class="container">
            <div class="title-wrap text-center">
                <h3 class="fs-14 text-uppercase fw-500 mb-2">Lựa chọn gói thiết kế phù hợp với nhu cầu của bạn</h3>
                <h2 class="fs-27 text-uppercase fw-900 mb-3">Sàn thiết kế</h2>
                <div class="line mx-auto mb-4 bg-black"></div>
            </div>
            <div class="design-inner position-relative px-5">
                <div class="design-slide">
                    <?php $i =0 ; foreach($design as $v) { $i++; ?>
                        <?php
                            $link = $v['link'];
                            $title = $v['title'];   
                        ?>
                        <div class="item-design">
                            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>" class="wrap-img img-100">
                                <img src="<?php echo $v['image']?>" alt="<?php echo $title; ?>">
                            </a>
                            <h3 class="mt-3 mb-2">
                                <a href="<?php echo $link; ?>" title="<?php echo $title; ?>" class="name fs-18 text-uppercase fw-900 text-line-clamp-1
                                <?php echo $i % 2 == 0 ? 'text-warning' : 'text-blue-cus'; ?>">
                                    <?php echo $title; ?>
                                </a>
                            </h3>
                            <div class="quantity text-white fs-14 fw-500 text-center mb-3 py-2 px-1 <?php echo $i % 2 == 0 ? ' bg-warning' : 'bg-blue-cus'; ?>">
                                <?php echo $v['quantity']; ?> sản phẩm đã thiết kế
                            </div>
                            <div class="type fs-14">
                                <?php echo $v['type']; ?>
                            </div>
                            <div class="line w-25 my-3 <?php echo $i % 2 == 0 ? 'bg-warning' : 'bg-blue-cus'; ?>"></div>
                        </div> 
                    <?php } ?>
                </div>
                <div class="custom-navigation">
                    <a href="javascript:;" title="nav" class="custom-prev position-absolute start-0 top-50 translate-middle-y" data-slide="design-slide">
                        <img src="images/product_related_prev_chervon.svg" alt="Prev">
                    </a>
                    <a href="javascript:;" title="nav" class="custom-next position-absolute end-0 top-50 translate-middle-y" data-slide="design-slide">
                        <img src="images/product_related_next_chervon.svg" alt="Next">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End design  -->

    <!-- Library -->
    <section class="library space-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-2">
                    <h2 class="fs-27 text-uppercase fw-900 title position-relative">Thư viện</h2>
                </div>
                <div class="col-lg-10">
                    <div class="tab-wrap d-flex justify-content-between align-items-center">
                        <ul role="tablist" class="d-flex tabs-info">
                            <li>
                                <button class="active tab_button cursor-pointer fs-14 bg-white py-1 px-0 me-xl-5 me-lg-3 me-md-3 text-uppercase fw-500" data-tab-target="#tab1">
                                    Sản phẩm nổi bật
                                </button>
                            </li>
                            <li>
                                <button class="tab_button cursor-pointer fs-14 bg-white py-1 px-0 me-xl-5 me-lg-3 me-md-3 text-uppercase fw-500" data-tab-target="#tab2">
                                    Nông sản - OCOP
                                </button>
                            </li>
                            <li>
                                <button class="tab_button cursor-pointer fs-14 bg-white py-1 px-0 me-xl-5 me-lg-3 me-md-3 text-uppercase fw-500" data-tab-target="#tab3">
                                    Hộp giấy
                                </button>
                            </li>
                            <li>
                                <button class="tab_button cursor-pointer fs-14 bg-white py-1 px-0 me-xl-5 me-lg-3 me-md-3 text-uppercase fw-500" data-tab-target="#tab4">
                                    Hộp yến
                                </button>
                            </li>
                            <li>
                                <button class="tab_button cursor-pointer fs-14 bg-white py-1 px-0 me-xl-5 me-lg-3 me-md-3 text-uppercase fw-500" data-tab-target="#tab5">
                                    Hộp trụ tròn
                                </button>
                            </li>
                            <li>
                                <button class="tab_button cursor-pointer fs-14 bg-white py-1 px-0 text-uppercase fw-500" data-tab-target="#tab6">
                                    Hộp trà
                                </button>
                            </li>
                        </ul>
                        <a href="" title="Xem tất cả" class="fs-14 text-black">
                            Xem tất cả
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-content mt-4">
                <div class="tab-pane fs-15 fade show active" id="tab1">
                    <div class="wrap-product d-flex flex-wrap">
                        <?php for($i = 0; $i < 15; $i++) { ?>
                            <div class="item-product px-2">
                                <a href="" title="" class="wrap-img img-100">
                                    <img src="images/library1.png" alt="">
                                </a>
                                <h3 class="mt-2">
                                    <a href="" title="" class="name text-black fs-14 fw-600 text-line-clamp-2">
                                        In hộp yến Thượng Đỉnh Yến Hoa
                                        <span class="text-blue-cus">PG-HY24-02</span>
                                    </a>
                                </h3>
                                <div class="row align-items-center justify-content-center my-2">
                                    <div class="col-md-5 col-lg-5 col-xl-4">
                                        <div class="favourites fs-14">
                                            <img src="icons/favourite.svg" alt="">
                                            20
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-xl-4">
                                        <div class="views fs-14">
                                            <img src="icons/view.svg" alt="">
                                            266
                                        </div>
                                    </div>
                                </div>
                                <div class="min-quantity fs-14 text-center fw-500 transition-03">
                                    Số lượng tối thiểu (300)
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane fs-15 fade" id="tab2">hhh</div>
                <div class="tab-pane fs-15 fade" id="tab3">ccc</div>
                <div class="tab-pane fs-15 fade" id="tab4">dđ</div>
                <div class="tab-pane fs-15 fade" id="tab5">ee</div>
                <div class="tab-pane fs-15 fade" id="tab6">ee</div>
            </div>

            <div class="img-wrap">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="img-left img-100">
                            <img src="images/library_img1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="img-right img-100">
                            <img src="images/library_img2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End library -->

    <!-- Business -->
    <?php
        $business = array(
            '1' => array(
                'link' => '',
                'title' => 'Mỹ phẩm',
                'image' => 'images/business1.png',
                'des' => 'Mỹ phẩm là ngành hàng luôn đòi hỏi có sự cải tiến và thay đổi. Đầu tư bao bì mỹ phẩm giúp sản phẩm không bị biến đổi tính chất theo thời gian, tăng giá trị sử dụng đồng thời tránh xảy ra tình trạng rơi vỡ.'
            ),
            '2' => array(
                'link' => '',
                'title' => 'Nông sản - OCOP',
                'image' => 'images/business2.png',
                'des' => 'Nông sản là mặt hàng xuất khẩu chủ lực của Việt Nam tới nhiều thị trường thế giới. Bao bì nông sản tác động trực tiếp đến hành vi mua hàng của người dùng, đến sự thành công của sản phẩm và chiến dịch bán hàng.'
            ),
            '3' => array(
                'link' => '',
                'title' => 'Dược',
                'image' => 'images/business3.png',
                'des' => 'Dược phẩm là ngành hàng thiết yếu và quan trọng để chăm sóc sức khỏe con người. Bao bì dược phẩm giúp bảo quản tốt thuốc bên trong, duy trì chất lượng thuốc trong thời gian dài.'
            ),
            '4' => array(
                'link' => '',
                'title' => 'Thời trang',
                'image' => 'images/business4.png',
                'des' => 'Thời trang là ngành có sự biến đổi nhanh chóng theo xu hướng của thị trường. Giá trị của món hàng thời trang được nâng lên khi mẫu mã được in ấn cẩn thận và bao bì đóng gói kỹ lưỡng.'
            ),
            '5' => array(
                'link' => '',
                'title' => 'Sự kiện',
                'image' => 'images/business5.png',
                'des' => 'Sự kiện đang dần trở thành một lĩnh vực hot, có nhu cầu cao trong xã hội. Khi thực hiện tổ chức sự kiện thì ấn phẩm chính là điểm nhấn truyền tải thông điệp của nhãn hàng đến với người tiêu dùng.'
            ),
            '6' => array(
                'link' => '',
                'title' => 'Lễ tết',
                'image' => 'images/business6.png',
                'des' => 'Lễ Tết là một trong những ngày quan trọng đối với người dân Việt Nam. Ấn phẩm Lễ Tết được xem như là “chiến dịch” mà hầu hết các doanh nghiệp không thể bỏ qua vì nó giúp tạo dựng ấn tượng cho khách hàng, là công cụ marketing hiệu quả.'
            ),
        )
    ?>
    <section class="business space-section">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="fs-27 text-uppercase fw-900 mb-3">Lĩnh vực kinh doanh</h2>
                <div class="line mx-auto bg-black"></div>
            </div>
            <div class="row business-inner">
                <?php foreach($business as $v) { ?>
                    <?php
                        $link = $v['link'];
                        $title = $v['title'];    
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="item p-3 transition-03">
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <a href="<?php echo $link; ?>" title="<?php echo $title; ?>" class="wrap-img img-100">
                                        <img src="<?php echo $v['image']; ?>" alt="<?php echo $title; ?>">
                                    </a>
                                    <a href="<?php echo $link; ?>" title="<?php echo $title; ?>" class="bg-blue-cus text-white d-block fw-700 see mt-3 p-2 fs-14 text-center visibility-hidden opacity-0 transition-03">
                                        Xem
                                    </a>
                                </div>
                                <div class="col-md-9 col-lg-9">
                                    <div class="content">
                                        <div class="mb-1">
                                            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>" class="title fs-20 fw-700 text-uppercase text-black transition-03">
                                                <?php echo $title; ?>
                                            </a>
                                        </div>
                                        <div class="des text-line-clamp-4 fs-14 fw-500 line-height-22">
                                            <?php echo $v['des']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End business -->

    <!-- Foundation -->
    <?php 
        $foundation = array(
            '1' => array(
                'image'=> 'icons/icon-foundation1.svg',
                'title' => 'Điền thông tin đặt hàng',
                'des' => '
                    <div>Khách hàng điền đầy đủ thông tin cần thiết để in ấn theo các bước hướng dẫn của Printgo, chọn gói in mong muốn, số lượng để bắt đầu tiến hành in ấn.</div>
                    <div>Sau khi có đầy đủ thông tin, hệ thống sẽ cập nhật giá sản phẩm để khách hàng có thể tiến hành các bước tiếp theo.</div>
                '
            ),
            '2' => array(
                'image'=> 'icons/icon-foundation2.svg',
                'title' => 'Kiểm tra thông tin đơn hàng',
                'des' => '
                    <div>Khách hàng kiểm tra lại toàn bộ các thông tin chi tiết về đơn hàng, giá, khuyến mại trước khi chuyển in.</div>
                    <div>Trong trường hợp cần sửa lại thông tin có thể bấm quay lại để chỉnh sửa phù hợp.</div>
                '
            ),
            '3' => array(
                'image'=> 'icons/icon-foundation3.svg',
                'title' => 'Điền thông tin thanh toán, nhận hàng',
                'des' => '
                    <div>Quý khách lựa chọn hình thức thanh toán mong muốn, điền địa chỉ nhận hàng.</div>
                    <div>Sau khi đơn hàng hoàn thành sẽ được chuyển đến địa chỉ đã đăng ký của khách hàng.</div>
                '
            ),
        )
    ?>
    <section class="foundation has-bg space-section">
        <div class="container">
            <div class="title-wrap text-center">
                <h3 class="fs-14 text-uppercase fw-500 mb-2">Nền tảng thiết kế và in ấn số 1 Việt Nam</h3>
                <h2 class="fs-27 text-uppercase fw-900 mb-3">In ấn dễ dàng hơn cùng <span class="text-blue-cus">Hupuna</span></h2>
                <div class="line mx-auto bg-black"></div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 position-relative">
                    <div class="video text-uppercase text-white cursor-pointer text-center p-2 fw-600 position-absolute">
                        Video hướng dẫn
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <?php $i = 0; foreach($foundation as $v) { $i++; ?>
                        <div class="item pt-4">
                            <div class="row">
                                <div class="col-md-2 col-lg-2">
                                    <div class="wrap-img img-100">
                                        <img src="<?php echo $v['image']; ?>" alt="<?php echo $v['title']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-10 col-lg-10">
                                    <div class="content">
                                        <div class="title fs-20 fw-900 mb-2 text-uppercase <?php echo $i % 2 == 0 ? 'text-warning' : 'text-blue-cus'; ?>">
                                            <?php echo $v['title']; ?>
                                        </div>
                                        <div class="des fw-500 fs-14 line-height-22 mb-3">
                                            <?php echo $v['des']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End foundation -->

    <!-- Story  -->
    <?php 
        $story = array(
            '1' => array(
                'link' => '',
                'image' => 'images/story1.jpg',
                'created' => '07/03/2025',
                'views' => '709',
                'title' => 'Plastic box — Vì sao trở thành bao bì dẫn đầu thị trường?',
                'des' => 'Từ ngành thực phẩm, mỹ phẩm đến điện tử, loại bao bì này xuất hiện ở khắp mọi nơi xung quanh chúng ta. Vậy điều gì đã giúp plastic box không ngừng mở rộng và thống trị thị trường?',
            ),
            '2' => array(
                'link' => '',
                'image' => 'images/story2.jpg',
                'created' => '07/03/2025',
                'views' => '249',
                'title' => 'Tìm hiểu về polygonal box - bao bì hộp đa giác độc đáo',
                'des' => 'Một trong những thiết kế nổi bật được ưa chuộng trong những năm gần đây chính là polygonal box — hộp đa giác với kiểu dáng sáng tạo, nổi bật nhờ các đường nét góc cạnh và cấu trúc độc đáo. ',
            ),
            '3' => array(
                'link' => '',
                'image' => 'images/story3.jpg',
                'created' => '06/03/2025',
                'views' => '693',
                'title' => 'Hộp giấy có quai xách - Giải pháp bao bì hiện đại đầy tiện ích cho mọi nhu cầu',
                'des' => 'Nổi bật trong xu hướng bao bì hiện đại, hộp giấy có quai xách đang trở thành lựa chọn hàng đầu nhờ thiết kế thông minh, dễ dàng cầm nắm và di chuyển. ',
            ),
        )
    ?>
    <section class="story">
        <div class="container">
            <div class="title-wrap text-center">
                <h3 class="fs-14 text-uppercase fw-500 mb-2">Cập nhật tin tức, xu hướng thiết kế</h3>
                <h2 class="fs-27 text-uppercase fw-900 mb-3">Câu chuyện đồ họa</h2>
                <div class="line mx-auto bg-black"></div>
            </div>
            <div class="row">
                <?php foreach($story as $v) { ?>
                    <?php 
                        $link = $v['link'];
                        $title = $v['title'];
                    ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="item-story position-relative">
                            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>" class="wrap-img img-100">
                                <img src="<?php echo $v['image']; ?>" alt="<?php echo $title; ?>">
                            </a>
                            <div class="content">
                                <div class="row align-items-center infos pb-2">
                                    <div class="col-md-7 col-lg-7 col-xl-6 fs-13">
                                        <img src="icons/date.svg" alt="created">
                                        <?php echo $v['created']; ?>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-xl-6 fs-13">
                                        <img src="icons/view.svg" alt="views">
                                        <?php echo $v['views']; ?>
                                    </div>
                                </div>
                                <h3 class="my-2">
                                    <a href="<?php echo $link; ?>" title="<?php echo $title; ?>" class="name fs-14 fw-700 text-black text-line-clamp-2 transition-03">
                                        <?php echo $title; ?>
                                    </a>
                                </h3>
                                <div class="des fs-14 text-line-clamp-3">
                                    <?php echo $v['des']; ?>
                                </div>
                            </div>
                            <a href="<?php echo $link; ?>" title="Xem chi tiết" class="see-detail text-white text-uppercase fw-600 position-absolute d-block end-0 fs-14 bg-blue-cus">
                                Xem chi tiết
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-6 col-lg-3">
                    <div class="item-story position-relative">
                        <div class="content">
                            <?php for($i = 0 ; $i < 3; $i++) { ?>
                                <div class="item-story-sm pt-3">
                                    <h3 class="my-2">
                                        <a href="" title="" class="name fs-14 fw-700 text-black text-line-clamp-2 transition-03">
                                            Dự án thiết kế và in hộp đựng trang sức Family
                                        </a>
                                    </h3>
                                    <div class="row align-items-center infos pb-2">
                                        <div class="col-md-7 col-lg-7 col-xl-6 fs-13">
                                            <img src="icons/date.svg" alt="created">
                                            06/03/2025
                                        </div>
                                        <div class="col-md-5 col-lg-5 col-xl-6 fs-13">
                                            <img src="icons/view.svg" alt="views">
                                            630
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <a href="" title="Xem chi tiết" class="see-detail text-white text-uppercase fw-600 position-absolute d-block end-0 fs-14 bg-blue-cus">
                            Xem chi tiết
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End story   -->

    <!-- Promotion -->
    <section class="promotion bg-blue-cus text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="item d-flex justify-content-center align-items-center">
                        <div class="wrap-img">
                            <img src="images/print.png" alt="" class="object-fit-cover">
                        </div>
                        <div class="content">
                            <div class="title text-uppercase fs-14 fw-700 mb-2">
                                In ấn
                            </div>
                            <div class="des fs-13 fw-500">
                                Mọi lúc, mọi nơi
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="item d-flex justify-content-center align-items-center">
                        <div class="wrap-img">
                            <img src="images/artboard.svg" alt="" class="object-fit-cover">
                        </div>
                        <div class="content">
                            <div class="title text-uppercase fs-14 fw-700 mb-2">
                                Công nghệ
                            </div>
                            <div class="des fs-13 fw-500">
                                Tiên phong
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="item d-flex justify-content-center align-items-center">
                        <div class="wrap-img">
                            <img src="images/design.png" alt="" class="object-fit-cover">
                        </div>
                        <div class="content">
                            <div class="title text-uppercase fs-14 fw-700 mb-2">
                                Thiết kế 
                            </div>
                            <div class="des fs-13 fw-500">
                                Kho thư viện phong phú
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="item d-flex justify-content-center align-items-center">
                        <div class="wrap-img">
                            <img src="images/quanlity.png" alt="" class="object-fit-cover">
                        </div>
                        <div class="content">
                            <div class="title text-uppercase fs-14 fw-700 mb-2">
                                Chất lượng
                            </div>
                            <div class="des fs-13 fw-500">
                                Luôn luôn đảm bảo
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Promotion -->

    <?php include 'footer.php'; ?>

    <script src="js/base.js"></script>
    <script src="js/page_home.js"></script>
</body>

</html>


