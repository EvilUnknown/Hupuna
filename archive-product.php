<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/base-style.css" rel="stylesheet">
    <link href="./css/categories.css" rel=" stylesheet">
    <link href="./css/product-item.css" rel=" stylesheet">
    <link href="./css/bootstrap-grid.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="w-100 clear-both">
        <div class="container">
            <!-- Start categories -->
            <div class="categories">
                <div class="border-bottom mt-4 d-flex">
                    <a href="#" class="btn btn-primary fs-18 border-0">Danh mục</a>
                    <a href="#" class="see-more fw-500 align-items-center d-flex">XEM THÊM</a>
                </div>
                <div class="row mt-2">
                    <div class="carousel-container">
                        <div class="custom_slider" data-slides-to-show="6" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="2000"
                            data-slides-to-show-tablet="4" data-slides-to-scroll-tablet="1">
                            <div class="item">
                                <div class="img-100 imgCategory">
                                    <img src="./images/hopcarton.jfif" alt="Product 1">
                                </div>
                                <p class="fw-bold mt-2 fs-18 text-line-clamp-2 nameCategory">HỘP CARTON</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgCategory">
                                    <img src="./images/hopcarton.jfif" alt="Product 1">
                                </div>
                                <p class="fw-bold mt-2 fs-18 text-line-clamp-2 nameCategory">HỘP IN OFFSET</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgCategory">
                                    <img src="./images/hopcarton.jfif" alt="Product 1">
                                </div>
                                <p class="fw-bold mt-2 fs-18 text-line-clamp-2 nameCategory">BĂNG DÍNH</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgCategory">
                                    <img src="./images/hopcarton.jfif" alt="Product 1">
                                </div>
                                <p class="fw-bold mt-2 fs-18 text-line-clamp-2 nameCategory">MÀNG PE- MÀNG CHÍT</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgCategory">
                                    <img src="./images/hopcarton.jfif" alt="Product 1">
                                </div>
                                <p class="fw-bold mt-2 fs-18 text-line-clamp-2 nameCategory">XỐP FOAM</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgCategory">
                                    <img src="./images/hopcarton.jfif" alt="Product 1">
                                </div>
                                <p class="fw-bold mt-2 fs-18 text-line-clamp-2 nameCategory">XỐP KHÍ - BÓNG KHÍ</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgCategory">
                                    <img src="./images/hopcarton.jfif" alt="Product 1">
                                </div>
                                <p class="fw-bold mt-2 fs-18 text-line-clamp-2 nameCategory">HỘP CARTON</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Categories -->
            <!-- Start -->
            <div class="mt-4">
                <div class="border-bottom mt-4 d-flex">
                    <a href="#" class="btn btn-primary fs-18 border-0">Sản phẩm nổi bật</a>
                    <a href="#" class="see-more fw-500 align-items-center d-flex">XEM THÊM</a>
                </div>
                <div class="row mt-2">
                    <div class="carousel-container">
                        <div class="custom_slider" data-slides-to-show="8" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="2500"
                            data-slides-to-show-tablet="5" data-slides-to-scroll-tablet="1">
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="mt-4">
                <div class="border-bottom mt-4 d-flex">
                    <a href="#" class="btn btn-primary fs-18 border-0">Hộp Carton</a>
                    <a href="#" class="see-more fw-500 align-items-center d-flex">XEM THÊM</a>
                </div>
                <div class="bannerCategories img-100 mt-3">
                    <img src="./images/bannerhopcarton.jfif">
                </div>
                <div class="row mt-3">
                    <div class="carousel-container">
                        <div class="custom_slider" data-slides-to-show="8" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="3000"
                            data-slides-to-show-tablet="5" data-slides-to-scroll-tablet="1">
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End -->

            <!-- Start -->
            <div class="mt-4">
                <div class="border-bottom mt-4 d-flex">
                    <a href="#" class="btn btn-primary fs-18 border-0">Hộp In Offset</a>
                    <a href="#" class="see-more fw-500 align-items-center d-flex">XEM THÊM</a>
                </div>
                <div class="bannerCategories img-100 mt-3">
                    <img src="./images/bannerhopcarton.jfif">
                </div>
                <div class="row mt-3">
                    <div class="carousel-container">
                        <div class="custom_slider" data-slides-to-show="8" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="3100"
                            data-slides-to-show-tablet="5" data-slides-to-scroll-tablet="1">
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                            <div class="item">
                                <?php include 'product-item.php'; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End -->

        </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>


    <script src="./js/base.js"></script>

</body>

</html>