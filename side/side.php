<div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big text-uppercase"
  data-owl-options="{
                'nav': false,
                'responsive': {
                    '992': {
                        'nav': true
                    }
                }
            }">

  <?php
  require('db.php');
  $tv = "select * from thuong_mai order by id ASC limit 0,3";
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
    <div class="home-slide home-slide1 banner">
      <img class="slide-bg" src="HinhCTSP/<?php echo $tv_2["hinhanh"]; ?>"
        style="background-color: #cfcfcf;" alt="slider image">
    </div>
  <?php } ?>
</div>