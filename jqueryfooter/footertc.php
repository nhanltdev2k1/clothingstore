<body data-spy="scroll" data-target="#category-list">
    <div class="page-wrapper">
        <footer class="footer">
            <div class="footer-top">
                <div class="container-fluid top-border d-flex align-items-center justify-content-between flex-wrap">
                    <div class="footer-left widget-newsletter d-md-flex align-items-center">
                        <div class="widget-newsletter-info">
                            <p class="p-text-h3">Đăng Ký Nhận Bản Tin</p>
                            <p class="widget-newsletter-content ls-0 font1 text-body mb-0">Nhận tất cả thông tin mới nhất về sự kiện, khuyến mãi và ưu đãi.</p>
                        </div>
                        <form action="#">
                            <div class="footer-submit-wrapper d-flex">
                                <input type="email" class="form-control" placeholder="Nhập địa chỉ Email..." size="40"
                                    required>
                                <button type="submit" class="btn btn-dark btn-sm ls-10">Theo Dõi</button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-right">
                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"></a>
                        </div><!-- End .social-icons -->
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget">
                                <p class="p-text-h4">Thông Tin Liên Hệ</p>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-widget">
                                            <p class="widget-title p-text-h4">ĐỊA CHỈ:</p>
                                            <?php
                                            require('db.php');
                                            $tv1 = "select * from tin_thicong where thuocloai=2 order by id=2 desc limit 0,1";
                                            $tv_11 = mysqli_query($link, $tv1);
                                            $a_tv_11 = mysqli_query($link, $tv1);
                                            $stt = 1;
                                            while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                                $id = "$tv_21[id]";
                                                $tieude_en = "$tv_21[tieude_en]";
                                                $thuocloai = "$tv_21[mota]";
                                            ?>
                                                <a href="#"><?php echo $thuocloai; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 pl-xl-0">
                                        <div class="contact-widget">
                                            <p class="widget-title p-text-h4">ĐIỆN THOẠI:</p>
                                            <?php
                                            require('db.php');
                                            $tv1 = "select * from tin_thicong where thuocloai=3 order by id=3 desc limit 0,1";
                                            $tv_11 = mysqli_query($link, $tv1);
                                            $a_tv_11 = mysqli_query($link, $tv1);
                                            $stt = 1;
                                            while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                                $id = "$tv_21[id]";
                                                $tieude_en = "$tv_21[tieude_en]";
                                                $thuocloai = "$tv_21[mota]";
                                            ?>
                                                <a href="#"><?php echo $thuocloai; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="contact-widget email">
                                            <p class="widget-title p-text-h4">EMAIL:</p>
                                            <?php
                                            require('db.php');
                                            $tv1 = "select * from tin_thicong where thuocloai=4 order by id=4 desc limit 0,1";
                                            $tv_11 = mysqli_query($link, $tv1);
                                            $a_tv_11 = mysqli_query($link, $tv1);
                                            $stt = 1;
                                            while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                                $id = "$tv_21[id]";
                                                $tieude_en = "$tv_21[tieude_en]";
                                                $thuocloai = "$tv_21[mota]";
                                            ?>
                                                <a href="email:<?php echo $thuocloai; ?>"><span class="__cf_email__" data-cfemail="eb868a8287ab8e938a869b878ec5888486"><?php echo $thuocloai; ?></span></a>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 pl-xl-0">
                                        <div class="contact-widget">
                                            <p class="widget-title p-text-h4">NGÀY/GIỜ LÀM VIỆC:</p>
                                            <a href="#">Thứ Hai - Chủ Nhật / 9:00 AM - 8:00 PM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2">
                            <div class="widget">
                                <p class="widget-title p-text-h4">Tài Khoản</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="links mb-0">
                                            <li><a href="demo19-about.html">Đăng Ký</a></li>
                                            <li><a href="demo19-contact.html">Đăng Nhập</a></li>
                                            <li><a href="dashboard.html">Tài Khoản</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="links mb-0">
                                            <li><a href="#">Giỏ Hàng</a></li>
                                            <li><a href="#">Tìm Kiếm</a></li>
                                            <li><a href="#">Lịch Sử Mua Hàng</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End .widget -->
                        </div>
                        <div class="offset-lg-1 col-lg-2">
                            <div class="widget">
                                <p class="widget-title p-text-h4">Liên Kết Nhanh</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="links mb-0">
                                            <li><a href="#">Đồ Đôi</a></li>
                                            <li><a href="#">Đồ Cho Gia Đình</a></li>
                                            <li><a href="#">Áo Thun Form Rộng</a></li>
                                            <li><a href="#">Áo Thun Nữ</a></li>
                                            <li><a href="#">Áo Ba Lỗ</a></li>
                                            <li><a href="#">Quần Ngắn</a></li>
                                            <li><a href="#">Quần Dài</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End .widget -->
                        </div>
                        <div class="offset-lg-1 col-lg-2">
                            <div class="widget">
                                <p class="widget-title p-text-h4">Góc Tin Tức</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="links mb-0">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 3";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhads/$tv_2[hinhanh]";
                                                $id = "$tv_2[id]";
                                                $tieude_en = "$tv_2[tieude_en]";
                                                $tieude = "$tv_2[tieude]";
                                                $mota = "$tv_2[mota]";
                                                $ngay = "$tv_2[ngay]";
                                                $url = $tv_2['linkurl'];
                                                $link = str_replace("?", "", strtolower("thongtin/$url"));
                                            ?>
                                                <li><a href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End .widget -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container-fluid top-border"></div>
                <div class="container-fluid d-sm-flex align-items-center" style="justify-content: center;">
                    <div class="footer-center">
                        <?php
                        //include_once("phan_trang.php");
                        require('db.php');
                        $tv = "select * from gioi_thieu order by id asc limit 0,4";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($tv_2 = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                            $id = "$tv_2[id]";
                            $tieude_en = "$tv_2[tieude_en]";
                            $tieude = "$tv_2[tieude]";
                            $mota = "$tv_2[mota]";
                            $ngay = "$tv_2[ngay]";
                            $url = $tv_2['linkurl'];
                            $link = str_replace("?", "", strtolower("gioithieu/$url"));
                        ?>
                            <span class="center-policy"><a href="<?php echo "$link"; ?>" class="custom-link"><?php echo $tieude; ?></a></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="container-fluid d-sm-flex align-items-center">

                    <div class="footer-right">
                        <span class="footer-policy">©lovestudio.com . 2024. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons mr-0">
                            <span class="payment-icon visa"
                                style="background-image: url(hinhmenu/payments/payment-visa.svg)"></span>
                            <span class="payment-icon paypal"
                                style="background-image: url(hinhmenu/payments/payment-paypal.svg)"></span>
                            <span class="payment-icon stripe"
                                style="background-image: url(hinhmenu/payments/payment-stripe.png)"></span>
                            <span class="payment-icon verisign"
                                style="background-image:  url(hinhmenu/payments/payment-verisign.svg)"></span>
                        </div>
                    </div>

                </div>

            </div><!-- End .footer-bottom -->
        </footer>
    </div>
</body>