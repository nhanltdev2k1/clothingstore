<body data-spy="scroll" data-target="#category-list" data-offset="71">
    <div class="page-wrapper">
        <main class="main">
            <div class="main-container mt-3 mt-md-0">
                <div class="container-fluid">
                    <div class="category-list" id="category-list">
                        <ul class="nav category-list-nav">
                            <li class="nav-item green">
                                <a href="#cat-1" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/couple.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Đồ Đôi</span>
                                </a>
                            </li>
                            <li class="nav-item orange">
                                <a href="#cat-2" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/family.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Đồ Cho Gia Đình</span>
                                </a>
                            </li>
                            <li class="nav-item green">
                                <a href="#cat-3" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/t-shirt.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Áo Thun Form Rộng</span>
                                </a>
                            </li>
                            <li class="nav-item yellow">
                                <a href="#cat-4" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/t-shirt-girl.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Áo Thun Nữ</span>
                                </a>
                            </li>
                            <li class="nav-item gray">
                                <a href="#cat-5" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/short.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Quần Ngắn</span>
                                </a>
                            </li>
                            <li class="nav-item lightblue">
                                <a href="#cat-6" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/trouest.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Quần Dài</span>
                                </a>
                            </li>
                        </ul>
                    </div><!-- End .category-list -->
                    <div class="category-details">
                        <section id="cat-1" class="category-section">
                            <div class="category-title appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <p class="cat-title">ĐỒ ĐÔI</p>
                                <a href="sanpham/do-doi" class="btn btn-dark">Xem Tất Cả</a>
                            </div><!-- End .category-title -->
                            <div class="products-slider custom-products owl-carousel owl-theme appear-animate"
                                data-owl-options="{
                                'dots': false,
                                'responsive': {
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }" data-animation-name="fadeInDownShorter" data-animation-delay="200">
                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham where thuocloai=1 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                                $tv_1 = mysqli_query($link, $tv);
                                $a_tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude_en = "$row[tieude_en]";
                                    $tieude = "$row[tieude]";
                                    $mota = "$row[mota]";
                                    $ngay = "$row[ngay]";
                                    $url = $row['linkurl'];
                                    $gia = "$row[gia]";
                                    $gia_formatted = number_format($gia, 0, ',', '.');
                                    $link = str_replace("?", "", strtolower("chitiet/$url"));
                                ?>
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="<?php echo "$link"; ?>">
                                                <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude_en"; ?>" width="205"
                                                    height="205" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-hot">HOT</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="3" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                                <a href="<?php echo "$link_hinh"; ?>" class="btn-icon btn-add-view"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="<?php echo "$link"; ?>" class="btn-icon btn-add-link"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="title-wrap">
                                                <h3 class="product-title">
                                                    <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                                </h3>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="category-description appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="banner banner1" style="background-color: #6db2d9;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 1 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner banner2" style="background-color: #f4f4f4;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 2 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cat-2" class="category-section">
                            <div class="category-title appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <p class="cat-title">ĐỒ CHO GIA ĐÌNH</p>
                                <a href="sanpham/do-cho-gia-dinh" class="btn btn-dark">Xem Tất Cả</a>
                            </div><!-- End .category-title -->
                            <div class="products-slider custom-products owl-carousel owl-theme appear-animate"
                                data-owl-options="{
                                'dots': false,
                                'responsive': {
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }" data-animation-name="fadeInDownShorter" data-animation-delay="200">

                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham where thuocloai=2 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                                $tv_1 = mysqli_query($link, $tv);
                                $a_tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude_en = "$row[tieude_en]";
                                    $tieude = "$row[tieude]";
                                    $mota = "$row[mota]";
                                    $ngay = "$row[ngay]";
                                    $url = $row['linkurl'];
                                    $gia = "$row[gia]";
                                    $gia_formatted = number_format($gia, 0, ',', '.');
                                    $link = str_replace("?", "", strtolower("chitiet/$url"));
                                ?>
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="<?php echo "$link"; ?>">
                                                <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>" width="205"
                                                    height="205" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-hot">HOT</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="3" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                                <a href="<?php echo "$link_hinh"; ?>" class="btn-icon btn-add-view"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="<?php echo "$link"; ?>" class="btn-icon btn-add-link"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="title-wrap">
                                                <p class="product-title" style="color: #000;">
                                                    <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                                </p>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="category-description appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="banner banner3" style="background-color: #f4f4f4;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 3 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner banner4" style="background-color: #242527;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 4 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cat-3" class="category-section">
                            <div class="category-title appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <p class="cat-title">ÁO THUN FORM RỘNG</p>
                                <a href="sanpham/ao-thun-form-rong" class="btn btn-dark">Xem Tất Cả</a>
                            </div><!-- End .category-title -->
                            <div class="products-slider custom-products owl-carousel owl-theme appear-animate"
                                data-owl-options="{
                                'dots': false,
                                'responsive': {
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }" data-animation-name="fadeInDownShorter" data-animation-delay="200">
                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham  where thuocloai=3 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                                $tv_1 = mysqli_query($link, $tv);
                                $a_tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude_en = "$row[tieude_en]";
                                    $tieude = "$row[tieude]";
                                    $mota = "$row[mota]";
                                    $ngay = "$row[ngay]";
                                    $url = $row['linkurl'];
                                    $gia = "$row[gia]";
                                    $gia_formatted = number_format($gia, 0, ',', '.');
                                    $link = str_replace("?", "", strtolower("chitiet/$url"));
                                ?>
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="<?php echo "$link"; ?>">
                                                <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>" width="205"
                                                    height="205" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-hot">HOT</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="3" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                                <a href="<?php echo "$link_hinh"; ?>" class="btn-icon btn-add-view"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="<?php echo "$link"; ?>" class="btn-icon btn-add-link"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="title-wrap">
                                                <h3 class="product-title">
                                                    <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                                </h3>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="category-description appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="banner banner5" style="background-color: #292929;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 5 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner banner6" style="background-color: #f4f4f4;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 6 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cat-4" class="category-section">
                            <div class="category-title appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <p class="cat-title">ÁO THUN NỮ</p>
                                <a href="sanpham/ao-thun-nu" class="btn btn-dark">Xem Tất Cả</a>
                            </div><!-- End .category-title -->
                            <div class="products-slider custom-products owl-carousel owl-theme appear-animate"
                                data-owl-options="{
                                'dots': false,
                                'responsive': {
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }" data-animation-name="fadeInDownShorter" data-animation-delay="200">
                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham  where thuocloai=4 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                                $tv_1 = mysqli_query($link, $tv);
                                $a_tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude_en = "$row[tieude_en]";
                                    $tieude = "$row[tieude]";
                                    $mota = "$row[mota]";
                                    $ngay = "$row[ngay]";
                                    $url = $row['linkurl'];
                                    $gia = "$row[gia]";
                                    $gia_formatted = number_format($gia, 0, ',', '.');
                                    $link = str_replace("?", "", strtolower("chitiet/$url"));
                                ?>
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="<?php echo "$link"; ?>">
                                                <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>" width="205"
                                                    height="205" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-hot">HOT</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="3" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                                <a href="<?php echo "$link_hinh"; ?>" class="btn-icon btn-add-view"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="<?php echo "$link"; ?>" class="btn-icon btn-add-link"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="title-wrap">
                                                <h3 class="product-title">
                                                    <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                                </h3>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="category-description appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="banner banner5" style="background-color: #292929;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 7 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner banner6" style="background-color: #f4f4f4;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 8 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cat-5" class="category-section">
                            <div class="category-title appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <p class="cat-title">QUẦN NGẮN</p>
                                <a href="sanpham/quan-ngan" class="btn btn-dark">Xem Tất Cả</a>
                            </div><!-- End .category-title -->
                            <div class="products-slider custom-products owl-carousel owl-theme appear-animate"
                                data-owl-options="{
                                'dots': false,
                                'responsive': {
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }" data-animation-name="fadeInDownShorter" data-animation-delay="200">
                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham  where thuocloai=5 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                                $tv_1 = mysqli_query($link, $tv);
                                $a_tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude_en = "$row[tieude_en]";
                                    $tieude = "$row[tieude]";
                                    $mota = "$row[mota]";
                                    $ngay = "$row[ngay]";
                                    $url = $row['linkurl'];
                                    $gia = "$row[gia]";
                                    $gia_formatted = number_format($gia, 0, ',', '.');
                                    $link = str_replace("?", "", strtolower("chitiet/$url"));
                                ?>
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="<?php echo "$link"; ?>">
                                                <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>" width="205"
                                                    height="205" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-hot">HOT</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="3" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                                <a href="<?php echo "$link_hinh"; ?>" class="btn-icon btn-add-view"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="<?php echo "$link"; ?>" class="btn-icon btn-add-link"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="title-wrap">
                                                <h3 class="product-title">
                                                    <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                                </h3>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="category-description appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="banner banner9" style="background-color: #22252a;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 9 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner banner10" style="background-color: #f4f4f4">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 10 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cat-6" class="category-section">
                            <div class="category-title appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <p class="cat-title">QUẦN DÀI</p>
                                <a href="sanpham/quan-dai" class="btn btn-dark">Xem Tất Cả</a>
                            </div><!-- End .category-title -->
                            <div class="products-slider custom-products owl-carousel owl-theme appear-animate"
                                data-owl-options="{
                                'dots': false,
                                'responsive': {
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }" data-animation-name="fadeInDownShorter" data-animation-delay="200">
                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham  where thuocloai=6 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                                $tv_1 = mysqli_query($link, $tv);
                                $a_tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude_en = "$row[tieude_en]";
                                    $tieude = "$row[tieude]";
                                    $mota = "$row[mota]";
                                    $ngay = "$row[ngay]";
                                    $url = $row['linkurl'];
                                    $gia = "$row[gia]";
                                    $gia_formatted = number_format($gia, 0, ',', '.');
                                    $link = str_replace("?", "", strtolower("chitiet/$url"));
                                ?>
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="<?php echo "$link"; ?>">
                                                <img src="<?php echo "$link_hinh"; ?>" alt="<?php echo "$tieude"; ?>" width="205"
                                                    height="205" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-hot">HOT</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="3" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                                <a href="<?php echo "$link_hinh"; ?>" class="btn-icon btn-add-view"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="<?php echo "$link"; ?>" class="btn-icon btn-add-link"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="title-wrap">
                                                <h3 class="product-title">
                                                    <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                                </h3>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="category-description appear-animate" data-animation-name="fadeInDownShorter"
                                data-animation-delay="200">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="banner banner11" style="background-color: #f4f4f4;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 11 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner banner12" style="background-color: #f5a083;">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM tin_sanpham WHERE id = 12 LIMIT 1";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                            ?>
                                                <figure>
                                                    <img src="HinhCTSP/Hinhdichvu/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>"
                                                        width="825" height="178">
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- End .category-details -->
                </div>
            </div>

            <section class="feature-boxes-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                            data-animation-delay="200">
                            <div class="feature-box feature-box-simple text-center mb-2">
                                <div class="feature-box-icon">
                                    <i class="icon-earphones-alt"></i>
                                </div>
                                <div class="feature-box-content p-0">
                                    <p class="p-text-h3">Hỗ Trợ Khách Hàng</p>
                                    <p class="p-text-h5">Cần Giúp Đỡ?</>
                                    <p style="padding-top: 20px;">Nếu bạn cần hỗ trợ, xin vui lòng liên hệ với chúng tôi. Chúng tôi luôn sẵn sàng giúp đỡ bạn trong quá trình mua sắm và sử dụng sản phẩm.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-sm-6.col-lg-3 -->
                        <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                            data-animation-delay="400">
                            <div class="feature-box feature-box-simple text-center mb-2">
                                <div class="feature-box-icon">
                                    <i class="icon-credit-card"></i>
                                </div>
                                <div class="feature-box-content p-0">
                                    <p class="p-text-h3">Thanh Toán An Toàn</p>
                                    <p class="p-text-h5">An Toàn &amp; Nhanh Chóng</p>
                                    <p style="padding-top: 20px;">Chúng tôi cung cấp phương thức thanh toán an toàn và nhanh chóng, đảm bảo thông tin của bạn được bảo mật tối đa khi mua sắm tại cửa hàng của chúng tôi.</p>

                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                            data-animation-delay="600">
                            <div class="feature-box feature-box-simple text-center mb-2">
                                <div class="feature-box-icon">
                                    <i class="icon-action-undo"></i>
                                </div>
                                <div class="feature-box-content p-0">
                                    <p class="p-text-h3">Hoàn Trả Miễn Phí</p>
                                    <p class="p-text-h5">Dễ Dàng &amp; Miễn Phí</p>
                                    <p style="padding-top: 20px;">Chúng tôi cung cấp dịch vụ hoàn trả miễn phí, giúp bạn dễ dàng đổi trả sản phẩm mà không gặp phải bất kỳ khó khăn nào.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                            data-animation-delay="800">
                            <div class="feature-box feature-box-simple text-center mb-2">
                                <div class="feature-box-icon">
                                    <i class="icon-shipping"></i>
                                </div>
                                <div class="feature-box-content p-0">
                                    <p class="p-text-h3">Miễn Phí Vận Chuyển</p>
                                    <p class="p-text-h5">Cho Đơn Hàng Trên 199vnđ</p>
                                    <p style="padding-top: 20px;">Chúng tôi cung cấp dịch vụ vận chuyển miễn phí cho tất cả các đơn hàng có giá trị trên 199vnđ, giúp bạn tiết kiệm chi phí mua sắm.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container-->
            </section><!-- End .feature-boxes-container -->
        </main><!-- End .main -->
    </div><!-- End .page-wrapper -->
</body>

</html>