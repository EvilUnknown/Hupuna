document.addEventListener("DOMContentLoaded", function () {
  const menuItems = document.querySelectorAll(".menu-left li");
  const submenus = document.querySelectorAll(".submenu");

  menuItems.forEach(item => {
      item.addEventListener("mouseover", function () {
          let menuId = this.getAttribute("data-menu");

          submenus.forEach(sub => {
              sub.classList.remove("active");
          });

          document.getElementById(menuId).classList.add("active");
      });
  });
});