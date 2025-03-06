function openSidebar() {
    document.getElementById("sidebar").classList.add("open");
    document.getElementById("overlay").classList.add("show");
    document.body.classList.add("no-scroll"); // Khóa scroll
}
function closeSidebar() {
    document.getElementById("sidebar").classList.remove("open");
    document.getElementById("overlay").classList.remove("show");
    document.body.classList.remove("no-scroll"); // Khôi phục scroll
}
function toggleSubmenu(id) {
    document.getElementById(id).style.display =
        document.getElementById(id).style.display === "block" ? "none" : "block";
}