<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/base-style.css" rel="stylesheet">
    <link href="./css/detailcategories.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="w-100 clear-both">

        <div class="breadcrumb">
            <ul class="container">
                <li><a href="#">Trang chủ</a></li>
                <li>Hộp Carton</li>
            </ul>

        </div>
        <div class="container">
            <div class="category mb-5">
                <div class="border-bottom d-flex">
                    <a href="#" class="btn btn-primary fs-18 border-0">Hộp carton nắp đối</a>
                    <a href="#" class="see-more">XEM THÊM</a>
                </div>
                <div class="row mt-2">
                    <div class="carousel-container">
                        <div class="custom_slider" data-slides-to-show="3" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="1500">
                            <div class="item">
                                <div class="img-100 imgdetaisCategory">
                                    <img src="./images/bannerhopcarton.jfif" alt="HỘP SIZE NHỎ">
                                </div>
                                <p class="fw-bold mt-2 fs-18 line-clamp">HỘP SIZE NHỎ</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgdetaisCategory">
                                    <img src="./images/bannerhopcarton.jfif" alt="HỘP SIZE VỪA">
                                </div>
                                <p class="fw-bold mt-2 fs-18 line-clamp">HỘP SIZE VỪA</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgdetaisCategory">
                                    <img src="./images/bannerhopcarton.jfif" alt="HỘP SIZE LỚN">
                                </div>
                                <p class="fw-bold mt-2 fs-18 line-clamp">HỘP SIZE LỚN</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgdetaisCategory">
                                    <img src="./images/bannerhopcarton.jfif" alt="HỘP SIZE LỚN">
                                </div>
                                <p class="fw-bold mt-2 fs-18 line-clamp">HỘP SIZE LỚN</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="category mb-5">
                <div class="border-bottom d-flex">
                    <a href="#" class="btn btn-primary fs-18 border-0">Hộp carton nắp gài</a>
                    <a href="#" class="see-more">XEM THÊM</a>
                </div>
                <div class="row mt-2">
                    <div class="carousel-container">
                        <div class="custom_slider" data-slides-to-show="3" data-slides-to-scroll="1"
                            data-slides-to-show-mobile="2" data-slides-to-scroll-mobile="1" data-slides-to-speed="2000">
                            <div class="item">
                                <div class="img-100 imgdetaisCategory">
                                    <img src="./images/bannerhopcarton.jfif" alt="HỘP SIZE NHỎ">
                                </div>
                                <p class="fw-bold mt-2 fs-18 line-clamp">HỘP SIZE NHỎ</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgdetaisCategory">
                                    <img src="./images/bannerhopcarton.jfif" alt="HỘP SIZE VỪA">
                                </div>
                                <p class="fw-bold mt-2 fs-18 line-clamp">HỘP SIZE VỪA</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgdetaisCategory">
                                    <img src="./images/bannerhopcarton.jfif" alt="HỘP SIZE LỚN">
                                </div>
                                <p class="fw-bold mt-2 fs-18 line-clamp">HỘP SIZE LỚN</p>
                            </div>
                            <div class="item">
                                <div class="img-100 imgdetaisCategory">
                                    <img src="./images/bannerhopcarton.jfif" alt="HỘP SIZE LỚN">
                                </div>
                                <p class="fw-bold mt-2 fs-18 line-clamp">HỘP SIZE LỚN</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="row selectCategory">
                <!--Start select desktop -->
                <div class="col-3 desktop">
                    <div class="d-flex align-items-center">
                        <img class="iconMenu" src="./icons/menu-blue.svg">
                        <h2 class="fs-20 fw-600">Tất cả danh mục</h2>
                    </div>
                    <div class="row">
                        <div id="filterContent" class="mt-3">
                            <ul class="categoryList">
                                <li class="category-item" onclick="toggleSubmenu('cartonBox')"><img class="icon-right"
                                        src="./icons/right-svgrepo-com.svg" alt=""> Hộp
                                    carton
                                    <ul class="subcategory cartonBox openClose" style="display: none;">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v1" value="v1"> Hộp carton nắp đối
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v2" value="v2"> Hộp carton nắp đối
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v3" value="v3"> Hộp carton nắp đối
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item" onclick="toggleSubmenu('ofsetBox')"><img class="icon-right"
                                        src="./icons/right-svgrepo-com.svg" alt=""> Hộp in ofset
                                    <ul class="subcategory ofsetBox openClose" style="display: none;">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v4" value="v4"> Hộp dựng trà
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v5" value="v5"> Hộp dựng trà
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v6" value="v6"> Hộp dựng trà
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Băng dính</li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Màng PE - Màng chít</li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Xốp Foam</li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Xốp khí - Bóng khí</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row cartonBox openClose" style="display: none;">
                        <div class="d-flex align-items-center">
                            <img class="iconMenu iconFilter" src="./icons/filter-svgrepo-com.svg">
                            <h2 class="fs-20">HỘP CARTON</h2>
                        </div>
                        <div id="filterStatus" class="mt-3">
                            <ul class="categoryList">
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo cấu tạo nắp
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v7" value="v7"> Hộp nắp đối
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v8" value="v8"> Hộp nắp gài
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo kích thước
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v9" value="v9"> Hộp size nhỏ (< 20 cm)
                                                    </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v10" value="v10"> Hộp size vừa (20 - 40 cm)
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v11" value="v11"> Hộp size lớn (> 40 cm)
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo số lớp
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v12" value="v12"> 3 lớp
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v13" value="v13"> 5 lớp
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v14" value="v14"> 7 lớp
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo loại sóng
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v15" value="v15"> Sóng A
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v16" value="v16"> Sóng B
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v17" value="v17"> Sóng C
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v18" value="v18"> Sóng E
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v19" value="v19"> Sóng AB
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v20" value="v20"> Sóng AE
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v21" value="v21"> Sóng BC
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v22" value="v22"> Sóng BE
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v23" value="v23"> Sóng CE
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v24" value="v24"> Sóng EBC
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo màu sắc
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v25" value="v25"> Mặt nâu, đáy mộc
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v26" value="v26"> 2 mặt nâu
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v27" value="v27"> Mặt trắng, đáy nâu
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v28" value="v28"> Mặt trắng, đáy mộc
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo định lượng giấy
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v29" value="v29"> 70 gsm
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v30" value="v30"> 80 gsm
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v31" value="v31"> 90 gsm
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v32" value="v32"> 100 gsm
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v33" value="v33"> 150 gsm
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo khu vực
                                    <ul id="giay" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v34" value="v34"> Miền Bắc
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v35" value="v35"> Miền Nam
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row ofsetBox openClose" style="display: none;">
                        <div class="d-flex align-items-center">
                            <img class="iconMenu iconFilter" src="./icons/filter-svgrepo-com.svg">
                            <h2 class="fs-20">HỘP IN OFSET</h2>
                        </div>
                        <div id="filterStatus" class="mt-3">
                            <ul class="categoryList">
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo cấu tạo nắp
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v7" value="v7"> Hộp nắp đối
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v8" value="v8"> Hộp nắp gài
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo kích thước
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v9" value="v9"> Hộp size nhỏ (< 20 cm)
                                                    </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v10" value="v10"> Hộp size vừa (20 - 40 cm)
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v11" value="v11"> Hộp size lớn (> 40 cm)
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo số lớp
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v12" value="v12"> 3 lớp
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v13" value="v13"> 5 lớp
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v14" value="v14"> 7 lớp
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo loại sóng
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v15" value="v15"> Sóng A
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v16" value="v16"> Sóng B
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v17" value="v17"> Sóng C
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v18" value="v18"> Sóng E
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v19" value="v19"> Sóng AB
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v20" value="v20"> Sóng AE
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v21" value="v21"> Sóng BC
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v22" value="v22"> Sóng BE
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v23" value="v23"> Sóng CE
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v24" value="v24"> Sóng EBC
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo màu sắc
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v25" value="v25"> Mặt nâu, đáy mộc
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v26" value="v26"> 2 mặt nâu
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v27" value="v27"> Mặt trắng, đáy nâu
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v28" value="v28"> Mặt trắng, đáy mộc
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo định lượng giấy
                                    <ul id="carton" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v29" value="v29"> 70 gsm
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v30" value="v30"> 80 gsm
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v31" value="v31"> 90 gsm
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v32" value="v32"> 100 gsm
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v33" value="v33"> 150 gsm
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item"><img class="icon-right" src="./icons/right-svgrepo-com.svg"
                                        alt=""> Lọc theo khu vực
                                    <ul id="giay" class="subcategory">
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v34" value="v34"> Miền Bắc
                                            </label>
                                        </li>
                                        <li>
                                            <label onclick="event.stopPropagation()">
                                                <input type="checkbox" name="v35" value="v35"> Miền Nam
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row buttonSelect">
                        <div class="col-6 p-1">
                            <button class="btn btn-primary w-100 border-0">Thiết lập lại</button>
                        </div>
                        <div class="col-6 p-1">
                            <button class="btn btn-primary w-100 border-0">Áp dụng</button>
                        </div>
                        <div class="col-12 p-1">
                            <button class="btn btn-primary w-100 border-0">ĐẶT HÀNG THEO YÊU CẦU</button>
                        </div>
                    </div>
                </div>
                <!-- End select desktop -->

                <div class="col-9 filterProduct">
                    <div class=" mobile">
                        <!-- Start select -->
                        <nav class="navbar navbar-expand-lg bg-light">
                            <div class="container">
                                <!-- Nút mở Mega Menu -->
                                <div id="categoryMegaMenuBtn" class=" d-flex align-items-center">
                                    <img class="iconMenu" src="./icons/menu-white.svg">
                                    <h2 class="fs-18 fw-600 mb-0">Tất cả danh mục</h2>
                                </div>

                            </div>
                        </nav>

                        <!-- Mega Menu Toàn Màn Hình -->
                        <div id="categoryMegaMenu" class="category-mega-menu ">
                            <span id="closeMegaMenu" class="close-btn">&times;</span>
                            <div class="container py-3">
                                <div class="d-flex align-items-center">
                                    <img class="iconMenu" src="./icons/menu-svgrepo-com.svg">
                                    <h2 class="fs-18 fw-600 mb-0">Tất cả danh mục</h2>
                                </div>
                            </div>
                            <div class="row container">
                                <div id="filterContent">
                                    <ul class="categoryList">
                                        <li class="category-item fs-15 fw-600 mt-2"
                                            onclick="toggleSubmenu('cartonBox')">Hộp
                                            carton
                                            <div class="cartonBox openClose" style="display: none;">
                                                <div class="row">
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Hộp
                                                            carton
                                                            nắp đối</button>
                                                    </div>
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Hộp
                                                            carton
                                                            nắp gài</button>
                                                    </div>
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Hộp
                                                            carton
                                                            chuyển nhà</button>
                                                    </div>
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Hộp viên
                                                            kê
                                                            bê tông</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item fs-15 fw-600 mt-2" onclick="toggleSubmenu('ofsetBox')">
                                            Hộp
                                            in ofset
                                            <div class="ofsetBox openClose" style="display: none;">
                                                <div class="row">
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Hộp đựng
                                                            trà</button>
                                                    </div>
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Hộp đựng
                                                            bánh trung thu</button>
                                                    </div>
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Hộp đựng
                                                            quà
                                                            tặng</button>
                                                    </div>
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Thùng
                                                            đựng
                                                            nông sản</button>
                                                    </div>
                                                    <div class="col-6 subCategory mt-2">
                                                        <button class="w-100" onclick="event.stopPropagation()">Thùng
                                                            đựng
                                                            hàng gia dụng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item fs-15 fw-600 mt-2">Túi giấy</li>
                                        <li class="category-item fs-15 fw-600 mt-2">Màng PE - Màng chít</li>
                                        <li class="category-item fs-15 fw-600 mt-2">Xốp Foam</li>
                                        <li class="category-item fs-15 fw-600 mt-2">Xốp khí - Bóng khí</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row cartonBox openClose container" style="display: none;">
                                <div class="container">
                                    <!-- Nút mở Mega Menu -->
                                    <div class="d-flex align-items-center mb-2">
                                        <img class="iconMenu iconFilter" src="./icons/filter-svgrepo-com.svg">
                                        <h2 class="fs-15">HỘP CARTON</h2>
                                    </div>
                                </div>
                                <div id="filterStatus" class="mb-3">
                                    <ul class="categoryList">
                                        <li class="category-item fs-18 fw-600 mt-2">Lọc theo cấu tạo nắp
                                            <div class="row">
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Nắp đối</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Nắp gài</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item fs-18 fw-600 mt-2">Lọc theo kích thước
                                            <div class="row">
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Hộp size nhỏ</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Hộp size vừa</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Hộp size lớn</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item fs-18 fw-600 mt-2">Lọc theo màu sắc
                                            <div class="row">
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Mặt nâu, đáy mộc</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">2 mặt nâu</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Mặt trắng, đáy nâu</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Mặt trắng, đáy mộc</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item fs-18 fw-600 mt-2">Lọc theo số lớp
                                            <div class="row">
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">3 lớp</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">5 lớp</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">7 lớp</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item fs-18 fw-600 mt-2">Lọc theo loại sóng
                                            <div class="row">
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Sóng A</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Sóng B</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Sóng C</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Sóng E</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Sóng AB</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Sóng AE</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item fs-18 fw-600 mt-2">Lọc theo định lượng giấy
                                            <div class="row">
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">70 gsm</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">100 gsm</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">120 gsm</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">150 gsm</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item fs-18 fw-600 mt-2">Lọc theo khu vực
                                            <div class="row">
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Miền Bắc</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Miền Nam</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row ofsetBox openClose container" style="display: none;">
                                <div class="container">
                                    <!-- Nút mở Mega Menu -->
                                    <div class="d-flex align-items-center mb-2">
                                        <img class="iconMenu iconFilter" src="./icons/filter-svgrepo-com.svg">
                                        <h2 class="fs-15">HỘP IN OFFSET</h2>
                                    </div>
                                </div>
                                <div id="filterStatus" class="mb-3">
                                    <ul class="categoryList">
                                        <li class="category-item fs-18 fw-600 mt-2">Lọc theo loại sản phẩm
                                            <div class="row">
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Hộp đựng trà</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Hộp đựng bánh trung thu</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Hộp đựng quà tặng</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Hộp đựng nông sản</button>
                                                </div>
                                                <div class="col-6 subCategory mt-2">
                                                    <button class="w-100">Thùng đựng hàng gia dụng</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row buttonFilter buttonSelect container">
                                <div class="col-6 p-1">
                                    <button class="btn btn-primary w-100 border-0">Thiết lập lại</button>
                                </div>
                                <div class="col-6 p-1">
                                    <button class="btn btn-primary w-100 border-0">Áp dụng</button>
                                </div>
                                <div class="col-12 p-1">
                                    <button class="btn btn-primary w-100 border-0">ĐẶT HÀNG THEO YÊU CẦU</button>
                                </div>
                            </div>
                        </div>

                        <div class=" row mt-3 d-flex fs-18 align-items-center justify-content-center">
                            <div class="col-6">
                                <p class="fs-15" style="margin-left: 10px !important;">Sắp xếp theo</p>
                            </div>
                            <div class="col-6">
                                <p class="fs-15">1-60/103 kết quả</p>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center fs-15">
                                <select>
                                    <option selected>Phổ biến</option>
                                    <option value="1">Xem nhiều</option>
                                    <option value="2">Mua nhiều</option>
                                    <option value="3">Mới nhất</option>
                                </select>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center fs-15">
                                <select>
                                    <option selected>Giá</option>
                                    <option value="1">Thấp đến cao</option>
                                    <option value="2">Cao đến thấp</option>
                                </select>
                            </div>
                        </div>
                        <!-- End select -->
                    </div>
                    <div class="row desktop d-flex fs-18 align-items-center justify-content-center">
                        <div class="col-2">
                            <p class="fs-15">Sắp xếp theo</p>
                        </div>
                        <div class="col-8 d-flex align-items-center justify-content-center">
                            <button>Phổ biến</button>
                            <button>Mới nhất</button>
                            <button>Bán chạy</button>
                            <select>
                                <option selected>Giá</option>
                                <option value="1">Thấp đến cao</option>
                                <option value="2">Cao đến thấp</option>
                            </select>
                        </div>
                        <div class="col-2 fs-15">
                            <p>1-60/103 kết quả</p>
                        </div>
                    </div>

                    <div class="row listProduct mt-3">
                        <ul class=" d-flex align-items-center ">
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="img-100 imgProduct">
                                    <img src="./images/bannerhopcarton.jfif" alt="Product 1">
                                </div>
                                <div class="contentProduct mt-2">
                                    <p class="btn btn-danger fs-10">Giảm 1.000đ</p>
                                    <p class="fw-bolder fs-15 line-clamp">Thùng xốp đại kích thước 70 50 44 cm nuôi cá
                                    </p>
                                    <p class="text-danger">3.594 VNĐ <span class="btn btn-danger fs-10">25%</span></p>
                                    <div class="d-flex align-items-center">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/starblue.svg" alt="star">
                                        <img class="star" src="./icons/star.svg" alt="star">
                                        <span class="text-primary fs-10">Đã bán 200 SP</span>
                                    </div>

                                </div>
                            </li>


                        </ul>
                        <div class=" pagination d-flex justify-content-center align-items-center">
                            <a href="#">&laquo;</a>
                            <a href="#">1</a>
                            <a href="#" class="active">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">&raquo;</a>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="describeCategory">
                            <p class="fs-15 text-content">
                                Hộp carton là dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod
                                tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                tation
                                ullamcorper
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                dolor
                                in hendrerit in
                                vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                vero
                                eros et accumsan
                                et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                                feugait nulla facilisi.<br>
                                Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                tation
                                ullamcorper
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut
                                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                exerci tation
                                ullamcorper suscipit lobortis.
                            </p>
                            <button class=" mt-2 toggle-text w-100">Xem thêm</button>
                        </div>
                        <div>
                            <div class="bannerFooter img-100 mt-5">
                                <img src="./images/bannerFooter.jfif" alt="Banner Footer">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="./js/base.js"></script>


    <script>
    function toggleSubmenu(className) {
        const allSubmenus = document.getElementsByClassName("openClose");
        const submenu = document.getElementsByClassName(className);

        // Nếu submenu đang mở, đóng nó lại
        let isCurrentlyOpen = submenu.length > 0 && window.getComputedStyle(submenu[0]).display === "block";

        // Đóng tất cả submenu
        for (let i = 0; i < allSubmenus.length; i++) {
            allSubmenus[i].style.display = "none";
        }

        // Nếu submenu được chọn trước đó không mở, mở nó
        if (!isCurrentlyOpen) {
            for (let i = 0; i < submenu.length; i++) {
                submenu[i].style.display = "block";
            }
        }
    }
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".filterProduct .col-8 button");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                buttons.forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");
            });
        });
    });
    </script>

    <script>
    document.getElementById("categoryMegaMenuBtn").addEventListener("click", function() {
        document.getElementById("categoryMegaMenu").classList.add("show");
    });

    document.getElementById("closeMegaMenu").addEventListener("click", function() {
        document.getElementById("categoryMegaMenu").classList.remove("show");
    });

    // Đóng menu khi click ra ngoài
    document.addEventListener("click", function(event) {
        let menu = document.getElementById("categoryMegaMenu");
        let button = document.getElementById("categoryMegaMenuBtn");
        if (!menu.contains(event.target) && !button.contains(event.target)) {
            menu.classList.remove("show");
        }
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleBtn = document.querySelector(".toggle-text");
        const textContent = document.querySelector(".text-content");

        toggleBtn.addEventListener("click", function() {
            if (textContent.classList.contains("expanded")) {
                textContent.classList.remove("expanded");
                toggleBtn.textContent = "Xem thêm";
            } else {
                textContent.classList.add("expanded");
                toggleBtn.textContent = "Thu gọn";
            }
        });
    });
    </script>

</body>

</html>