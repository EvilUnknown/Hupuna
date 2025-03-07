// đóng mở menu
    function toggleSubmenuCategory(className) {
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


// chọn button
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".filterProduct .col-8 button");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                buttons.forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");
            });
        });
    });

    // js xem thêm
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


    function changeTab(selectedTab) {
        const tabSorts = document.querySelectorAll(".tabSort");
    const indicator = document.querySelector(".tab-indicator");
        tabSorts.forEach(tabSort => tabSort.classList.remove("active"));
        selectedTab.classList.add("active");

        // Di chuyển thanh chỉ báo dưới tab
        const tabRect = selectedTab.getBoundingClientRect();
        const tabsRect = document.querySelector(".tabSorts").getBoundingClientRect();
        indicator.style.width = `${tabRect.width}px`;
        indicator.style.transform = `translateX(${tabRect.left - tabsRect.left}px)`;
    }

    // Cập nhật vị trí mặc định của thanh chỉ báo ban đầu
    window.onload = () => {
        const activeTab = document.querySelector(".tabSort.active");
        changeTab(activeTab);
    };


// đóng mở megamenucategory
$( document ).ready(function() {
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
})


