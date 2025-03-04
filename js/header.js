// Dữ liệu menu dưới dạng JSON
const menuData = [
    {
        title: "☰ DANH MỤC SẢN PHẨM",
        submenu: [
            {
                title: "HỘP CARTON SÓNG THÔNG DỤNG",
                megaMenu: {
                    categories: [
                        {
                            title: "THEO CẤU TẠO",
                            items: ["Hộp Carton Nắp Đối", "Hộp Carton Nắp Đối", "Hộp Carton Nắp Đối",
                                    "Hộp Carton Nắp Đối", "Hộp Carton Nắp Đối", "Hộp Carton Nắp Đối"]
                        },
                        {
                            title: "THEO NGÀNH NGHỀ",
                            items: ["Hộp Carton Nắp Đối", "Hộp Carton Nắp Đối", "Hộp Carton Nắp Đối",
                                    "Hộp Carton Nắp Đối", "Hộp Carton Nắp Đối", "Hộp Carton Nắp Đối"]
                        }
                    ],
                    others: {
                        "CÔNG NGHỆ IN ẤN": ["Hộp Không In", "Hộp In Lụa", "Hộp In Flexo"],
                        "CHẤT LIỆU": ["Giấy Kraft", "VKT", "Chất Liệu Khác"],
                        "THEO LỚP": ["3 Lớp", "5 Lớp", "7 Lớp"]
                    }
                }
            },
            { title: "HỘP OFFSET MỀM CAO CẤP" },
            { title: "HỘP CARTON CỨNG CAO CẤP" },
            { title: "SẢN PHẨM IN NHANH" },
            { title: "KHAY ĐỊNH HÌNH" },
            { title: "TÚI GIẤY" },
            { title: "PHỤ KIỆN ĐÓNG HÀNG" },
            { title: "XEM TẤT CẢ" }
        ]
    },
    { title: "TRANG CHỦ",},
    { title: "DỊCH VỤ IN ẤN ▼" },
    { title: "VỀ CHÚNG TÔI" },
    { title: "TIN TỨC" },
    { title: "📹 VIDEO NỔI BẬT" }
];