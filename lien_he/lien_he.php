<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://worlddecoranl.com/'>Xu hướng nội thất 2024</a></h1>

<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://worlddecoranl.com/'>Xu hướng trang trí nhà cửa</a></h2>

<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://worlddecoranl.com/'>Cách bố trí nhà cửa theo phong thủy</a></h2>

<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://worlddecoranl.com/'>Trang trí nội thất hiện đại</a></h3>

<h3 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://worlddecoranl.com/'>Kiến thức cơ bản về nội thất</a></h3>

<?php

if (isset($_POST['luu'])) {

	include_once('database.php');

	$hoten = $_POST['txt_hoten'];

	$diachi = $_POST['txt_diachi'];

	$dt = $_POST['txt_dt'];

	$email = $_POST['txt_email'];

	$diemden = $_POST['txt_diemden'];

	$fax = $_POST['txt_fax'];

	$tieude = $_POST['txt_tieude'];

	$noidung = $_POST['txt_nd'];



	$email_lh = 'Hoangvudiemphuc@gmail.com';



	// Prepare the HTML content with inline CSS

	$tinnhan = "

    <html>

    <body style='font-family: Arial, sans-serif;'>

        <div style='width: 100%; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #f9f9f9;'>

            <div style='background-color: #4CAF50; padding: 10px 0; color: white; text-align: center; border-radius: 10px 10px 0 0;'>

                <h2>Thông tin người dùng</h2>

            </div>

            <div style='padding: 20px;'>

                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Họ và tên:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_hoten']}</span></div>

                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Email:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_email']}</span></div>

                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Số điện thoại:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_dt']}</span></div>

                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Địa chỉ:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_diachi']}</span></div>

                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Nội dung:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_nd']}</span></div>

            </div>

        </div>

    </body>

    </html>";



	$to = 'nhanlt.dev.it@gmail.com';

	$subject = $hoten;



	// Email headers

	$headers = "MIME-Version: 1.0" . "\r\n";

	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$headers .= 'From: ' . $email . "\r\n";



	// Send email using PHP's mail function

	mail($to, $subject, $tinnhan, $headers);



	// Using PHPMailer for sending email with more options

	require("class.phpmailer.php");

	$mailer = new PHPMailer();

	$mailer->IsSMTP();

	$mailer->CharSet = "utf-8";



	$mailer->SMTPAuth = true;

	$mailer->SMTPSecure = "ssl";

	$mailer->Host = "smtp.gmail.com";

	$mailer->Port = 465;



	$mailer->Username = "kythuatatv@gmail.com";

	$mailer->Password = "jyfd qyoc ggsv egid";

	$mailer->AddAddress('nhanlt.dev.it@gmail.com', 'Recipient Name');



	$mailer->FromName = $hoten;

	$mailer->From = $email;

	$mailer->Subject = "$hoten - Đăng Ký Thông Tin Dịch Vụ WorldDecorANL";

	$mailer->IsHTML(true);



	$mailer->Body = $tinnhan;



	if (!$mailer->Send()) {

		echo "Không gửi được ";

		echo "Lỗi: " . $mailer->ErrorInfo;

		echo "<script>window.location='?thamso=index.php'</script>";
	} else {

		echo '<script>

            alert("Cảm ơn đã liên hệ với chúng tôi!");

            </script>';
	}



	$ketnoi_maychu = ketnoi_MC();

	chon_CSDL($ketnoi_maychu);

	$truyvan = "INSERT INTO lienhe(hoten,diemden,diachi,dt,email,fax,tieude,noidung) VALUES ('$hoten','$diemden','$diachi','$dt','$email','$fax','$tieude','$noidung')";

	$kequa_truyvan = truyvan($truyvan, $ketnoi_maychu);

	if ($kequa_truyvan)

		thanhcong($hoten, $diemden, $diachi, $dt, $email, $fax, $tieude, $noidung);

	else

		loi($hoten);

	mysql_close($ketnoi_maychu);
}



function thanhcong($hoten, $diemden, $diachi, $dt, $email, $fax, $tieude, $noidung)

{

	// Success handling code

}



function loi($hoten)

{

	$ketnoi_maychu = ketnoi_MC();

	chon_CSDL($ketnoi_maychu);

	$truyvan = "SELECT * FROM lienhe WHERE hoten='$hoten'";

	$kequa_truyvan = truyvan($truyvan, $ketnoi_maychu);

	$somautin = @mysql_num_rows($kequa_truyvan);

	if ($somautin > 0)

		echo "<font color='red'>Lưu Không Thành Công. Vì tên khách hàng $hoten đã tồn tại.Hãy nhập mới";

	else

		echo "<font color='red'>Lưu Không Thành Công. Nhập tên khách hàng $hoten sai.Hãy nhập lại";
}

?>

<section class="page-title" style="background-image: url(hinhmenu/images/background/testimonial-bg-home4.jpg);">
	<p class="large-title p-text-h2">LIÊN HỆ</p>
	<div class="image-curve"></div>
	<div class="auto-container">
		<div class="title-outer text-center">
			<p class="title p-text-h2">LIÊN HỆ</p>
			<ul class="page-breadcrumb">
				<li><a href="trang-chu">Trang Chủ</a></li>
				<li>liên Hệ</li>
			</ul>
		</div>
	</div>
</section>


<section class="contact-details">
	<div class="container ">
		<div class="row">
			<div class="col-xl-7 col-lg-6">
				<div class="sec-title">
					<span class="sub-title">Massage Ngọc Ánh</span>
					<p class="p-text-h2">Để lại thông tin của bạn</p>
				</div>

				<form id="contact_form" name="contact_form" class action="#" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_name" class="form-control" type="text" placeholder="Nhập họ và tên...">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_email" class="form-control required email" type="email" placeholder="Nhập Email...">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_subject" class="form-control required" type="text" placeholder="Nhập mô tả ngắn...">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_phone" class="form-control" type="text" placeholder="Nhập số điện thoại...">
							</div>
						</div>
					</div>
					<div class=" mb-3">
						<textarea name="form_message" class="form-control required" rows="7" placeholder="Nhập nội dung..."></textarea>
					</div>
					<div class="mb-5">
						<input name="form_botcheck" class="form-control" type="hidden" value />
						<button type="submit" class="theme-btn btn-style-one mb-3 mb-sm-0" data-loading-text="Đang xử lý..."><span class="btn-title">Gửi Ngay</span></button>
						<button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Xoá Nhanh</span></button>
					</div>
				</form>

			</div>
			<div class="col-xl-5 col-lg-6">
				<div class="contact-details__right">
					<div class="sec-title">
						<span class="sub-title">Massage Ngọc Ánh</span>
						<p class="p-text-h2">Thông Tin</p>
						<?php
						//include_once("phan_trang.php");
						require('db.php');
						$tv1 = "select * from tin_thicong where thuocloai=1 order by id=1 desc limit 0,1";
						$tv_11 = mysqli_query($link, $tv1);
						$a_tv_11 = mysqli_query($link, $tv1);
						$stt = 1;
						while ($tv_21 = mysqli_fetch_array($tv_11)) {
							$id = "$tv_21[id]";
							$thuocloai = "$tv_21[mota]";
						?>
							<div class="text"><?php echo $thuocloai; ?></div>
						<?php } ?>
					</div>
					<ul class="list-unstyled contact-details__info">
						<li class="d-block d-sm-flex align-items-sm-center ">
							<div class="icon">
								<span class="lnr-icon-phone-plus"></span>
							</div>
							<div class="text ml-xs--0 mt-xs-10">
								<p class="p-text-h3">Điện thoại</p>
								<?php
								//include_once("phan_trang.php");
								require('db.php');
								$tv1 = "select * from tin_thicong where thuocloai=3 order by id=3 desc limit 0,1";
								$tv_11 = mysqli_query($link, $tv1);
								$a_tv_11 = mysqli_query($link, $tv1);
								$stt = 1;
								while ($tv_21 = mysqli_fetch_array($tv_11)) {
									$id = "$tv_21[id]";
									$thuocloai = "$tv_21[mota]";
								?>
									<a href="tel:<?php echo $thuocloai; ?>"><span><?php echo $thuocloai; ?></a>
								<?php } ?>
							</div>
						</li>
						<li class="d-block d-sm-flex align-items-sm-center ">
							<div class="icon">
								<span class="lnr-icon-envelope1"></span>
							</div>
							<div class="text ml-xs--0 mt-xs-10">
								<p class="p-text-h3">Email</p>
								<?php
								//include_once("phan_trang.php");
								require('db.php');
								$tv1 = "select * from tin_thicong where thuocloai=4 order by id=4 desc limit 0,1";
								$tv_11 = mysqli_query($link, $tv1);
								$a_tv_11 = mysqli_query($link, $tv1);
								$stt = 1;
								while ($tv_21 = mysqli_fetch_array($tv_11)) {
									$id = "$tv_21[id]";
									$thuocloai = "$tv_21[mota]";
								?>
									<a href="#"><span class="__cf_email__" data-cfemail="f7999292939f929b87b794989a8796998ed994989a"><?php echo $thuocloai; ?></span></a>
								<?php } ?>
							</div>
						</li>
						<li class="d-block d-sm-flex align-items-sm-center ">
							<div class="icon">
								<span class="lnr-icon-location"></span>
							</div>
							<div class="text ml-xs--0 mt-xs-10">
								<p class="p-text-h3">Địa Chỉ</p>
								<?php
								//include_once("phan_trang.php");
								require('db.php');
								$tv1 = "select * from tin_thicong where thuocloai=2 order by id=2 desc limit 0,1";
								$tv_11 = mysqli_query($link, $tv1);
								$a_tv_11 = mysqli_query($link, $tv1);
								$stt = 1;
								while ($tv_21 = mysqli_fetch_array($tv_11)) {
									$id = "$tv_21[id]";
									$thuocloai = "$tv_21[mota]";
								?>
									<span><?php echo $thuocloai; ?></span>
								<?php } ?>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>