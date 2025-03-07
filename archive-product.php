<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css" />
    <link href="./css/slick.css" rel="stylesheet">
    <link href="./css/bootstrap-grid.css" rel="stylesheet">
    <link href="./css/base-style.css" rel="stylesheet">
    <link href="./css/categories.css" rel=" stylesheet">
    <link href="./css/product-item.css" rel=" stylesheet">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/base.js"></script>
    <script src="./js/slick.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="w-100 clear-both">
        <div class="container">
            <!-- Start categories -->
            <div class="categories">
                <div class="border-bottom mt-4 d-flex">
                    <a href="#"
                        class="btn btn-primary fs-18 border-0 text-white position-relative fw-700 d-inline-block">Danh
                        mục</a>
                    <a href="#"
                        class="see-more fw-500 align-items-center d-flex text-black position-relative d-inline-block">XEM
                        THÊM</a>
                </div>
                <div class="row mt-2">
                    <div class="carousel-container position-relative">
                        <div class="custom_slider" data-slides-to-show="6" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="2000"
                            data-slides-to-show-tablet="4" data-slides-to-scroll-tablet="1">
                            <?php for ($i = 0; $i < 9; $i++) : ?>
                                <div class="item">
                                    <div class="img-100 imgCategory text-center cursor-pointer">
                                        <img src="./images/hopcarton.jfif" alt="Product 1">
                                    </div>
                                    <p class="fw-bold mt-2 fs-18 text-line-clamp-2 nameCategory text-center">HỘP CARTON</p>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Categories -->
            <!-- Start -->
            <div class="mt-4 outstandingProducts">
                <div class="border-bottom mt-4 d-flex">
                    <a href="#"
                        class="btn btn-primary fs-18 border-0 text-white position-relative fw-700 d-inline-block">Sản
                        phẩm nổi bật</a>
                    <a href="#"
                        class="see-more fw-500 align-items-center d-flex text-black position-relative d-inline-block">XEM
                        THÊM</a>
                </div>
                <div class="row mt-2">
                    <div class="carousel-container position-relative">
                        <div class="custom_slider" data-slides-to-show="8" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="2500"
                            data-slides-to-show-tablet="5" data-slides-to-scroll-tablet="1">
                            <?php for ($i = 0; $i < 9; $i++) : ?>
                                <div class="item cursor-pointer">
                                    <?php include 'product-item.php'; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="mt-4 outstandingProducts">
                <div class="border-bottom mt-4 d-flex">
                    <a href="#"
                        class="btn btn-primary fs-18 border-0 text-white position-relative fw-700 d-inline-block">Hộp
                        Carton</a>
                    <a href="#"
                        class="see-more fw-500 align-items-center d-flex text-black position-relative d-inline-block">XEM
                        THÊM</a>
                </div>
                <div class="bannerCategories img-100 mt-3">
                    <img src="./images/bannerhopcarton.jfif">
                </div>
                <div class="row mt-3">
                    <div class="carousel-container position-relative">
                        <div class="custom_slider" data-slides-to-show="8" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="3000"
                            data-slides-to-show-tablet="5" data-slides-to-scroll-tablet="1">
                            <?php for ($i = 0; $i < 9; $i++) : ?>
                                <div class="item cursor-pointer">
                                    <?php include 'product-item.php'; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End -->

            <!-- Start -->
            <div class="mt-4 outstandingProducts">
                <div class="border-bottom mt-4 d-flex">
                    <a href="#"
                        class="btn btn-primary fs-18 border-0 text-white position-relative fw-700 d-inline-block">Hộp In
                        Offset</a>
                    <a href="#"
                        class="see-more fw-500 align-items-center d-flex text-black position-relative d-inline-block">XEM
                        THÊM</a>
                </div>
                <div class="bannerCategories img-100 mt-3">
                    <img src="./images/bannerhopcarton.jfif">
                </div>
                <div class="row mt-3">
                    <div class="carousel-container position-relative">
                        <div class="custom_slider" data-slides-to-show="8" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="3100"
                            data-slides-to-show-tablet="5" data-slides-to-scroll-tablet="1">
                            <?php for ($i = 0; $i < 9; $i++) : ?>
                                <div class="item cursor-pointer">
                                    <?php include 'product-item.php'; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End -->

        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>

</html>