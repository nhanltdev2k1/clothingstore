<section class="page-title" style="background-image: url(hinhmenu/images/background/testimonial-bg-home4.jpg);">
    <p class="large-title p-text-h2">GIỚI THIỆU</p>
    <div class="image-curve"></div>
    <div class="auto-container">
        <div class="title-outer text-center">
            <p class="title p-text-h2">Thông Tin</p>
            <?php
            require('db.php');
            //$id = intval(preg_replace('/[^a-z0-9]+/i', '', $_GET["id"]));
            $id = $_GET['url'];
            $tv = "select * from gioi_thieu where linkurl like '%" . $id . "%' order by id ";
            $tv_1 = mysqli_query($link, $tv);
            $a_tv_1 = mysqli_query($link, $tv);
            $tv_2 = mysqli_fetch_array($tv_1);
            $thuocloai = "$tv_2[thuocloai]";
            $ten = "$tv_2[tieude]";
            ?>
            <ul class="page-breadcrumb">
                <li><a href="trang-chu">Trang Chủ</a></li>
                <li><?php echo "$ten" ?></li>
            </ul>
        </div>
    </div>
</section>
<section class="blog-details" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <?php
                include_once("phan_trang.php");
                require('db.php');
                //require('database.php');
                //$ketnoi_maychu = ketnoi_MC();
                //chon_CSDL($ketnoi_maychu);
                $p = new pager;
                $limit = 1;
                $start = $p->findStart($limit);
                $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM gioi_thieu"));
                $pages = $p->findPages($count, $limit);
                $id = $_REQUEST["url"];
                $result = mysqli_query($link, "SELECT * FROM gioi_thieu where linkurl like '%" . $id . "%' order by id desc limit $start,$limit");
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
            </div>
        </div>
    </div>
</section>