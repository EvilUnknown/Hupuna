$(document).ready(function () {
    let currentIndex = 0;
    let itemsPerView = getItemsPerView(); // Xác định số mục hiển thị theo kích thước màn hình
    const totalItems = $(".item-category").length;
    let maxIndex = Math.ceil(totalItems / itemsPerView) - 1;

    let isDragging = false;
    let startX, currentTranslate, prevTranslate, animationID;
    const carouselWrapper = $(".carousel-wrapper");

    function getItemsPerView() {
        let screenWidth = $(window).width();
        if (screenWidth <= 760) return 1;  // Mobile
        if (screenWidth >= 768 && screenWidth <= 1024) return 2; // Tablet
        return 3; // Desktop
    }

    function updateCarousel() {
        let screenWidth = $(window).width();
        let newTransform;
        
        if (screenWidth <= 760) {
            newTransform = -currentIndex * 112 + "%"; // Mobile
        } else if (screenWidth >= 768 && screenWidth <= 1024) {
            newTransform = -currentIndex * 108 + "%"; // Tablet
        } else {
            newTransform = -currentIndex * 103 + "%"; // Desktop
        }

        carouselWrapper.css("transform", "translateX(" + newTransform + ")");
    }

    $(".next").click(function () {
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    });

    $(".prev").click(function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    // Xử lý kéo chuột
    carouselWrapper.on("mousedown", function (event) {
        isDragging = true;
        startX = event.pageX;
        prevTranslate = -currentIndex * $(".item-category").outerWidth(true);
        carouselWrapper.css("cursor", "grabbing");
    });

    $(document).on("mousemove", function (event) {
        if (!isDragging) return;

        let currentX = event.pageX;
        let diff = currentX - startX;
        currentTranslate = prevTranslate + diff;
        carouselWrapper.css("transform", `translateX(${currentTranslate}px)`);
    });

    $(document).on("mouseup", function (event) {
        if (!isDragging) return;
        isDragging = false;
        carouselWrapper.css("cursor", "grab");

        let movedBy = event.pageX - startX;
        if (movedBy < -5 && currentIndex < maxIndex) {
            currentIndex++;
        } else if (movedBy > 5 && currentIndex > 0) {
            currentIndex--;
        }

        updateCarousel();
    });

    // Ngăn chặn chọn văn bản khi kéo
    carouselWrapper.on("dragstart", function (event) {
        event.preventDefault();
    });

    // Cập nhật giá trị khi resize màn hình
    $(window).resize(function () {
        itemsPerView = getItemsPerView();
        maxIndex = Math.ceil(totalItems / itemsPerView) - 1;
        updateCarousel();
    });

    // Gọi update lần đầu để đảm bảo hiển thị đúng khi tải trang
    updateCarousel();
});
