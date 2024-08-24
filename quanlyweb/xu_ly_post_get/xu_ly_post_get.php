<?php

	chong_pha_hoai();

?>

<?php

	if(isset($_POST['dangnhap_quantri']))

	{

		include("thuchien_dangnhap_quantri.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['them_menu_doc']))

	{

		include("cumchucnang/menu/menu_doc/thuc_hien_them.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_menu_doc']))

	{

		include("cumchucnang/menu/menu_doc/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_menu_doc")

	{

		include("cumchucnang/menu/menu_doc/xoa.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['them_menu_ngang']))

	{

		include("cumchucnang/menu/menu_ngang/thuc_hien_them.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_menu_ngang']))

	{

		include("cumchucnang/menu/menu_ngang/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_menu_ngang")

	{

		include("cumchucnang/menu/menu_ngang/xoa.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['them_san_pham']))

	{

		include("cumchucnang/dulieu/san_pham/thuc_hien_them.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_san_pham']))

	{

		include("cumchucnang/dulieu/san_pham/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_san_pham")

	{

		include("cumchucnang/dulieu/san_pham/xoa.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['them_tin_tuc']))

	{

		include("cumchucnang/dulieu/tin_tuc/thuc_hien_them.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_tin_tuc']))

	{

		include("cumchucnang/dulieu/tin_tuc/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_tin_tuc")

	{

		include("cumchucnang/dulieu/tin_tuc/xoa.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_du_lieu_mot_tin']))

	{

		include("cumchucnang/dulieu/du_lieu_mot_tin/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_thanh_vien']))

	{

		include("cumchucnang/thanhvien/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_thanh_vien")

	{

		include("cumchucnang/thanhvien/xoa.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_hoa_don")

	{

		include("cumchucnang/hoadon/xoa.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_hoa_don_1")

	{

		include("cumchucnang/hoadon/xoa_1.php");

		//trangtruoc();

		exit();

	}

	if(isset($_POST['sua_slide_show']))

	{

		include("cumchucnang/slideshow/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['cap_nhat_san_pham_trang_chu']))

	{

		include("cumchucnang/sanpham_trangchu/cap_nhat_san_pham_trang_chu.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['thaydoi_banner']))

	{

		include("cumchucnang/banner/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['thaydoi_footer']))

	{

		include("cumchucnang/footer/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['them_lien_lac_yahoo']))

	{

		include("cumchucnang/hotro_tructuyen/thuc_hien_them.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_nick_yahoo']))

	{

		include("cumchucnang/hotro_tructuyen/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_nick_yahoo")

	{

		include("cumchucnang/hotro_tructuyen/xoa.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['thaydoi_lienhe']))

	{

		include("cumchucnang/lien_he/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['them_quang_cao_trai']))

	{

		include("cumchucnang/quangcao/trai/thuc_hien_them.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_quang_cao_trai']))

	{

		include("cumchucnang/quangcao/trai/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_quang_cao_trai")

	{

		include("cumchucnang/quangcao/trai/xoa.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['them_quang_cao_phai']))

	{

		include("cumchucnang/quangcao/phai/thuc_hien_them.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_quang_cao_phai']))

	{

		include("cumchucnang/quangcao/phai/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="xoa_quang_cao_phai")

	{

		include("cumchucnang/quangcao/phai/xoa.php");

		trangtruoc();

		exit();

	}

	if(isset($_POST['sua_thong_tin_admin']))

	{

		include("cumchucnang/thongtin_quantri/thuc_hien_sua.php");

		trangtruoc();

		exit();

	}

	if($_GET['thamso']=="thoat")

	{

		unset($_SESSION[$ten_danh_dau."ky_danh__quan_tri"]);

		unset($_SESSION[$ten_danh_dau."mat_khau__quan_tri"]);

		chuyentrang("index.php");

		exit();

	}



?>