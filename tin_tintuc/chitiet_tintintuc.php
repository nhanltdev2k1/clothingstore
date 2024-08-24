<section class="page-title" style="background-image: url(hinhmenu/images/background/testimonial-bg-home4.jpg);">
    <p class="large-title p-text-h2">TIN TỨC</p>
    <div class="image-curve"></div>
    <div class="auto-container">
        <div class="title-outer text-center">
            <p class="title p-text-h2">Tin Tức - Sự Kiện</p>
            <?php
            require('db.php');
            //$id = intval(preg_replace('/[^a-z0-9]+/i', '', $_GET["id"]));
            $id = $_GET['url'];
            $tv = "select * from tin_tintuc where linkurl like '%" . $id . "%' order by id ";
            $tv_1 = mysqli_query($link, $tv);
            $a_tv_1 = mysqli_query($link, $tv);
            $tv_2 = mysqli_fetch_array($tv_1);
            $thuocloai = "$tv_2[thuocloai]";
            $ten = "$tv_2[tieude_en]";
            ?>
            <ul class="page-breadcrumb">
                <li><a href="trang-chu">Trang Chủ</a></li>
                <li><a href="tintuc/">Tin Tức</a></li>
                <li><?php echo "$ten" ?></li>
            </ul>
        </div>
    </div>
</section>
<section class="blog-details" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <?php
                include_once("phan_trang.php");
                require('db.php');
                //require('database.php');
                //$ketnoi_maychu = ketnoi_MC();
                //chon_CSDL($ketnoi_maychu);
                $p = new pager;
                $limit = 1;
                $start = $p->findStart($limit);
                $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_tintuc"));
                $pages = $p->findPages($count, $limit);
                $id = $_REQUEST["url"];
                $result = mysqli_query($link, "SELECT * FROM tin_tintuc where linkurl like '%" . $id . "%' order by id desc limit $start,$limit");
                // hiển thị DL
                if (mysqli_num_rows($result) <> 0) {
                    echo " <table width='100%' border='0' align='left'>";
                    $stt = 0;
                    while ($row = mysqli_fetch_object($result)) {
                        $ngay = $row->ngay;
                        $thuocloai = $row->thuocloai;
                        $tieude = doikyty($row->tieude);
                        $noidung = doikyty($row->noidung);
                        $mota = doikyty($row->mota);
                        $tieude_en = doikyty($row->tieude_en);
                        $facebook = $row->facebook;
                        $tukhoa = $row->tukhoa;
                        $url = khongdau($row->tieude);
                        $link = "thong-tin-$url-$id";
                        $hinhanh = "HinhCTSP/Hinhdichvu/" . $row->hinhanh;
                        $hinhanh = "<img src='$hinhanh'  text-align: center; alt='$tieude' title='$tieude'  >  ";
                        if ($stt % 2 == 0) {
                            echo "<tr>";
                        }
                        echo "<td align='left' width='100%'>";
                        echo "<table align='left' width='100%'>";
                        echo "<div >
                                  <h1 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tieude</a></h1> 	
                            <h2 style='font-size: 24px;
                            font-weight: bold;
                            margin-bottom: 15px;
                            line-height: 35px;'> $tieude_en</h2>
                    		<p style='font-size: 16px;line-height: 29px;font-weight: bold;'> <i>$mota </i></p>
                          
                                <div style='padding:20px; text-align: center; font-family:'Arial', sans-serif;'>
                            	<a href='$link'> $hinhanh </a></div>
                               <div style='font-size: 18px; font-family:'Arial', sans-serif;'>
                               $noidung
                                   </div>
                                   
                                    <h2 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tukhoa</a></h2> 
                        </div>";
                        echo " </table>";
                        echo "</td>";
                        $stt = $stt + 1;

                        if ($stt % 1 == 0) {
                            echo "</tr>";
                        }
                    }
                    echo " </table>";
                }
                ?>
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="hinhmenu/images/background/banner-ngocanh.jpg" alt="banner">
                    </div>
                </div>
                <div class="nav-links" style="padding-top: 50px;">
                    <?php
                    require('db.php');
                    // Fetch the first random article
                    $tv_prev = "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 1";
                    $tv_1_prev = mysqli_query($link, $tv_prev);
                    $row_prev = mysqli_fetch_array($tv_1_prev);
                    // Store the ID of the first article
                    $prev_id = $row_prev['id'];
                    $link_hinh_prev = "HinhCTSP/Hinhdichvu/{$row_prev['hinhanh']}";
                    $tieude_en_prev = $row_prev['tieude_en'];
                    $url_prev = $row_prev['linkurl'];
                    $link_prev = str_replace("?", "", strtolower("thongtin/$url_prev"));
                    ?>
                    <div class="prev">
                        <a href="<?php echo $link_prev; ?>" rel="prev"><?php echo $tieude_en_prev; ?></a>
                    </div>
                    <?php
                    // Fetch the second random article, ensuring it is different from the first one
                    $tv_next = "SELECT * FROM (SELECT * FROM tin_tintuc WHERE id != '$prev_id' ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 1";
                    $tv_1_next = mysqli_query($link, $tv_next);
                    $row_next = mysqli_fetch_array($tv_1_next);

                    $link_hinh_next = "HinhCTSP/Hinhdichvu/{$row_next['hinhanh']}";
                    $tieude_en_next = $row_next['tieude_en'];
                    $url_next = $row_next['linkurl'];
                    $link_next = str_replace("?", "", strtolower("thongtin/$url_next"));
                    ?>
                    <div class="next">
                        <a href="<?php echo $link_next; ?>" rel="next"><?php echo $tieude_en_next; ?></a>
                    </div>
                </div>

                <div class="comment-one">
                    <p class="comment-one__title p-text-h3">2 Bình luận</p>
                    <?php
                    //include_once("phan_trang.php");
                    require('db.php');
                    $tv = "select * from du_an order by id DESC limit 0,2";
                    $tv_1 = mysqli_query($link, $tv);
                    $a_tv_1 = mysqli_query($link, $tv);
                    ?>
                    <?php
                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                        $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                        $id = "$tv_2[id]";
                        $tieude = "$tv_2[tieude]";
                        $mota = "$tv_2[mota]";
                        $ngay = "$tv_2[ngay]";
                    ?>
                        <div class="comment-one__single">
                            <div class="comment-one__image"> <img src="hinhmenu/icon/user.jpg" alt> </div>
                            <div class="comment-one__content">
                                <p class="p-text-h3"><?php echo "$tieude"; ?></p>
                                <p><?php echo "$mota"; ?>
                                </p>
                                <a class="theme-btn btn-style-one comment-one__btn"><span class="btn-title">Trả lời</span></a>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="comment-form">
                        <p class="comment-form__title p-text-h3">Để lại bình luận của bạn</p>
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
                            <div class="mb-3">
                                <textarea name="form_message" class="form-control required" rows="5" placeholder="Nhập nội dung..."></textarea>
                            </div>
                            <div class="mb-3">
                                <input name="form_botcheck" class="form-control" type="hidden" value />
                                <button type="submit" class="theme-btn btn-style-one" data-loading-text="Đang xử lý..."><span class="btn-title">Gửi Ngay</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <?php
                include('menu_trai/leftdichvu.php');
                ?>
            </div>
        </div>
    </div>
</section>