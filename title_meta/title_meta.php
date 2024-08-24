

<?php
chong_pha_hoai();
?>
<?php
$title = "viettravel";
switch ($_GET['thamso']) {
	case "lien_he":
		$title = "lien-he";
		$title_meta = "Massage Nam Nữ";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "gioi_thieu":
		$title = "gioi-thieu";
		$title_meta = "Massage Nam";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "tin_tintuc":
		$title = "tin-tintuc";
		$title_meta = "Massage Nữ";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "tin_tintucct":
		$title = "tin-tintuc";
		$title_meta = "Massage Body";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "tin_dichvu":
		$title = "tin-dichvu";
		$title_meta = "Massage Foot";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "tin_dichvuct":
		$title = "tin-dichvu";
		$title_meta = "Dịch Vụ Massage Body";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "tin_sanpham":
		$title = "tin-sanpham";
		$title_meta = "Dịch Vụ Massage Foot";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "tin_sanphamct":
		$title = "tin-sanphamct";
		$title_meta = "Dịch Vụ Massage Nam Nữ";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "ma_sanpham":
		$title = "ma-sanpham";
		$title_meta = "Dịch Vụ Massage Nam";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "ma_sanphamct":
		$title = "ma-sanphamct";
		$title_meta = "Dịch Vụ Massage Nữ";
		$dis = "Massage Ngọc Ánh - Điểm đến thư giãn với dịch vụ massage body, massage chân, và massage chuyên biệt cho nam và nữ. Hãy liên hệ với chúng tôi tại 0919003498 để trải nghiệm chăm sóc sức khỏe toàn diện......";
		$key = "Massage body Sài Gòn, dịch vụ massage body TPHCM, massage toàn thân tại Sài Gòn, thư giãn với massage body Sài Gòn, địa chỉ massage body tốt ở TPHCM, massage body chuyên nghiệp tại TPHCM, massage body cho nam nữ ở Sài Gòn, spa massage body giá rẻ tại Sài Gòn, massage chân Sài Gòn, dịch vụ massage foot TPHCM, massage foot thư giãn tại Sài Gòn, massage chân chuyên nghiệp ở TPHCM, địa chỉ massage chân tốt tại Sài Gòn, spa massage foot giá tốt tại TPHCM, massage foot cho nam nữ ở Sài Gòn, massage bấm huyệt chân tại Sài Gòn, massage nam nữ Sài Gòn, dịch vụ massage nam nữ TPHCM, massage cho nam nữ tại Sài Gòn, massage cặp đôi ở TPHCM, địa chỉ massage nam nữ tốt tại Sài Gòn, spa massage nam nữ chuyên nghiệp TPHCM, massage thư giãn cho nam nữ ở Sài Gòn, massage đôi tại TPHCM, massage cho nam Sài Gòn, dịch vụ massage nam TPHCM, massage nam chuyên nghiệp ở Sài Gòn, địa chỉ massage nam tốt tại TPHCM, spa massage nam giá rẻ ở Sài Gòn, massage nam thư giãn tại TPHCM, massage body nam tại Sài Gòn, massage đặc biệt cho nam ở TPHCM, massage cho nữ Sài Gòn, dịch vụ massage nữ TPHCM, massage nữ thư giãn tại Sài Gòn, địa chỉ massage nữ tốt tại TPHCM, spa massage nữ chuyên nghiệp ở Sài Gòn, massage body nữ tại TPHCM, massage dành riêng cho nữ ở Sài Gòn, massage cho phụ nữ tại TPHCM, massage Sài Gòn uy tín, địa chỉ massage chuyên nghiệp tại TPHCM, dịch vụ massage giá rẻ Sài Gòn, spa massage chất lượng cao tại TPHCM, massage thư giãn toàn thân ở Sài Gòn, dịch vụ spa tốt nhất Sài Gòn, massage bấm huyệt tại TPHCM, chăm sóc sức khỏe với massage tại Sài Gòn";
		break;
	case "tim_kiem":

		$title_meta = $_GET['tu_khoa'];

		break;





		// GIOI THIEU 



	case "chitiet_gioithieu":

		$id = $_REQUEST['id'];

		$tv = "select * from gioi_thieu where linkurl like '%" . $id . "%' order by id ";

		$tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);

		$title_meta = $tv_2['tieude'];

		$dis = $tv_2['mota'];

		$key = $tv_2['tieude'];

		$title = "gioi-thieu";

		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];

		break;







		// tin tuc

	case "chitiet_tintintuc":

		$title = "tin-tintuc";

		$id = $_GET['url'];
		$tv = "select * from tin_tintuc where linkurl like '%" . $id . "%' order by id ";

		$tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);

		$title_meta = $tv_2['tieude_en'];

		$dis = $tv_2['mota'];

		$key = $tv_2['tieude'];

		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];

		break;

		// dich vu
	case "chitiet_tindichvu":
		$title = "tin-dichvu";
		$id = $_GET['url'];
		$tv = "select * from tin_dichvu where linkurl like '%" . $id . "%' order by id ";
		$tv_1 = mysqli_query($link, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$title_meta = $tv_2['tieude_en'];
		$dis = $tv_2['mota'];
		$key = $tv_2['tieude'];
		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
		break;
		// dich vu
	case "chitiet_tinthicong":
		$title = "tin-thicong";
		$id = $_REQUEST['id'];
		$tv = "select * from tin_thicong where id like '$id'";

		$tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);

		$title_meta = $tv_2['tieude_en'];

		$dis = $tv_2['mota'];

		$key = $tv_2['tieude'];

		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];

		break;



		// tin san pham

	case "chitiet_tinsanpham":

		$title = "tin-sanpham";

		$id = $_REQUEST['id'];

		$tv = "select * from tin_sanpham where id like '$id'";

		$tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);

		$title_meta = $tv_2['tieude_en'];

		$dis = $tv_2['mota'];

		$key = $tv_2['tieude'];

		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];

		break;

		// tin san phama

	case "chitiet_tinsanpham":

		$title = "tin-sanphama";

		$id = $_REQUEST['id'];

		$tv = "select * from tin_sanphama where id like '$id'";

		$tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);

		$title_meta = $tv_2['tieude'];

		$dis = $tv_2['mota'];

		$key = $tv_2['tieude'];

		$hinhanh = "/HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];

		break;





		// dich vu

	case "chitiet_masanpham":

		$title = "ma-sanpham";

		$id = $_REQUEST['id'];

		$tv = "select * from ma_sanpham where id like '$id'";

		$tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);

		$title_meta = $tv_2['tieude'];

		$dis = $tv_2['mota'];

		$key = $tv_2['tieude'];

		$hinhanh = "/HinhCTSP/" . $tv_2['hinhanh'];

		break;

		// ma san pham abc

	case "chitiet_masanphamabc":

		$title = "ma-sanphamabc";

		$id = $_REQUEST['id'];

		$tv = "select * from ma_sanphamabc where id like '$id'";

		$tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);

		$title_meta = $tv_2['tieude'];

		$dis = $tv_2['mota'];

		$key = $tv_2['tieude'];

		break;



	case "xuat_mot_tin":

		$tv = "select * from du_lieu_mot_tin where id='$_GET[id]'";

		$tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);

		$title_meta = $tv_2['ten'];

		break;

	default:

		$tv = "select * from he_thong  order by id  limit 0,1";

		$tv_1 = mysqli_query($link, $tv);

		$a_tv_1 = mysqli_query($link, $tv);

		$tv_2 = mysqli_fetch_array($tv_1);



		$tieude = "$tv_2[tieude]";



		$dis = "$tv_2[dis]";

		$key = "$tv_2[key]";

		$title_meta = "$tieude";

		$dis = "$dis";

		$key = "$key";
}

$config_url = $_SERVER["SERVER_NAME"];



?>