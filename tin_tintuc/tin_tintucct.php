    <main>
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumbs-area breadcrumb-bg">
            <div class="container">
                <h1 class="title wow fadeInUp" data-wow-delay="0.0s">News Details</h1>
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">News</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </section>
        <!--/ End-of Breadcrumbs-->

        <!-- Destination area S t a r t -->
        <section class="destination-details-section section-padding2">333
            <div class="container" id="pinBoxContainer">
                <div class="row g-4">
                    <div class="col-xl-8 col-lg-7">
                        <h1 style="padding-top: 20px;
                    		padding-left: 4px;
                    		color: #063;
                    		float: left;
                    		font-weight: 600;
                    		font-size: 22px;
                    		width: 100%;
                    		text-align: left;">
                            <?php echo "$ten" ?> </h1>

                        <?php
                        include_once("phan_trang.php");
                        require('database.php');
                        $ketnoi_maychu = ketnoi_MC();
                        chon_CSDL($ketnoi_maychu);
                        $p = new pager;
                        $limit = 1;
                        $start = $p->findStart($limit);
                        $count = mysql_num_rows(mysql_query("SELECT*FROM tin_tintuc"));
                        $pages = $p->findPages($count, $limit);
                        $id = $_REQUEST["id"];
                        $result = mysql_query("SELECT * FROM tin_tintuc where id like '$id' order by id desc limit $start,$limit");
                        // hiển thị DL
                        if (mysql_num_rows($result) <> 0) {
                            echo " <table width='100%' border='0' align='left'>";
                            $stt = 0;
                            while ($row = mysql_fetch_object($result)) {
                                $ngay = $row->ngay;
                                $tieude = $row->tieude;
                                $noidung = $row->noidung;
                                $mota = $row->mota;
                                $tieude_en = $row->tieude_en;
                                $facebook = $row->facebook;
                                $tukhoa = $row->tukhoa;
                                $vanchuyen = $row->vanchuyen;
                                $url = khongdau($row->tieude);
                                $link = "dich-vu-$url-$id";
                                $hinhndab = "HinhCTSP/Hinhdichvu/" . $row->hinhndab;
                                $hinhndab = "<img src='$hinhndab' alt='$tukhoa' title='$tukhoa'>";
                                $hinhanh = "HinhCTSP/Hinhdichvu/" . $row->hinhanh;
                                $hinhanh = "<img src='$hinhanh'  text-align: center; alt='$tieude' title='$tieude'  >  ";
                                if ($stt % 2 == 0) {
                                    echo "<tr>";
                                }
                                echo "<td align='left' width='100%'>";
                                echo "<table align='left' width='100%'>";

                                echo "<div >
                            <p> $tieude</p>
                    		<p> $mota</p>
                                <h2 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tieude_en </a></h2> 	
                                <div style='line-height: 15px;  font-size: 14px; text-align: center; width:100%; height:auto; padding-bottom: 20px;'>
                            	 $hinhanh </div>
                        
                               $noidung
                         	<h3 style='font-size:0px; color:#fff; padding:0px;><a href='$link'>$tukhoa </a></h3>
                     
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
                        <div class="news-details-banner imgEffect">
                            <img src="assets/images/destination/details.png" alt="travello">
                        </div>
                        <div class="news-details-content">

                            <h4 class="title">The World is a Book and Those Who do not Travel Read Only One Page.</h4>
                            <p class="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa
                                qui officia deserunt mollit anim id est laborum."</p>
                            <p class="pera">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae
                                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                odit aut fugit,
                                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                porro quisquam est,
                                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                                eius modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                                minima veniam, quis
                                nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                consequatur?
                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                molestiae consequatur,
                                vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                        </div>
                        <div class="news-details-info">
                            <h4 class="title">What We Learned Form This Tour</h4>
                            <ul class="expect-list">
                                <li class="list">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </li>
                                <li class="list">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor </li>
                                <li class="list">Lorem ipsum dolor sit amet, consectetur</li>
                            </ul>
                        </div>
                        <div class="tag-social-section d-flex justify-content-between gap-16 flex-wrap">
                            <div class="tag-section">
                                <h4 class="title">Tags :</h4>
                                <div class="tag-list">
                                    <div class="tags">
                                        <a href="javascript:void(0)" class="tag-btn">Travel</a>
                                    </div>
                                    <div class="tags">
                                        <a href="javascript:void(0)" class="tag-btn">Design</a>
                                    </div>
                                    <div class="tags">
                                        <a href="javascript:void(0)" class="tag-btn">Booking</a>
                                    </div>
                                    <div class="tags">
                                        <a href="javascript:void(0)" class="tag-btn">Destination</a>
                                    </div>
                                </div>
                            </div>
                            <div class="social-section">
                                <h4 class="title">Share :</h4>
                                <div class="social-list">
                                    <div class="tags">
                                        <a href="javascript:void(0)" class="social-btn"><i class="ri-facebook-fill"></i></a>
                                    </div>
                                    <div class="socials">
                                        <a href="javascript:void(0)" class="social-btn"><i class="ri-twitter-fill"></i></a>
                                    </div>
                                    <div class="socials">
                                        <a href="javascript:void(0)" class="social-btn"><i class="ri-linkedin-fill"></i></a>
                                    </div>
                                    <div class="socials">
                                        <a href="javascript:void(0)" class="social-btn"><i class="ri-instagram-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-section">
                            <div class="main-profile">
                                <div class="user-img-lg">
                                    <img src="assets/images/news/news-user-1.png" alt="travello">
                                </div>
                                <div class="user-info">
                                    <h4 class="name">Chris Jordan</h4>
                                    <p class="desg">Technical Content Writer</p>
                                    <p class="pera">Chris Jordan is a technical content writer at Travello. he’s a tech
                                        enthusiast, writer
                                        by day, programmer by night, and always a foodie at heart!</p>
                                </div>
                            </div>
                            <h4 class="comment-count">( 3 ) Comments</h4>
                            <div class="main-profile-two">
                                <div class="user-img-sm">
                                    <img src="assets/images/news/news-user-2.png" alt="travello">
                                </div>
                                <div class="user-info">
                                    <h4 class="name-sm">David Warner</h4>
                                    <p class="date">Jan 12, 2025</p>
                                    <p class="pera">Chris Jordan is a technical content writer at Travello. he’s a tech
                                        enthusiast, writer
                                        by day, programmer by night, and always a foodie at heart!</p>
                                    <div class="reply-btn">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_359_781)">
                                                    <path d="M22.9994 23.9992C22.7342 23.9992 22.4798 23.8939 22.2923 23.7063C22.1048 23.5188 21.9994 23.2645 21.9994 22.9992C21.9978 21.4084 21.3652 19.8832 20.2403 18.7584C19.1154 17.6335 17.5902 17.0008 15.9994 16.9993H10.1694V18.5852C10.1693 18.9808 10.052 19.3673 9.83221 19.6962C9.61244 20.025 9.30012 20.2813 8.93472 20.4326C8.56932 20.5839 8.16725 20.6235 7.77934 20.5464C7.39144 20.4693 7.03511 20.2789 6.75541 19.9992L0.876406 14.1203C0.313993 13.5577 -0.00195313 12.7948 -0.00195312 11.9993C-0.00195313 11.2038 0.313993 10.4408 0.876406 9.87826L6.75541 3.99927C7.03511 3.71965 7.39144 3.52924 7.77934 3.4521C8.16725 3.37497 8.56932 3.41457 8.93472 3.56591C9.30012 3.71725 9.61244 3.97353 9.83221 4.30235C10.052 4.63117 10.1693 5.01777 10.1694 5.41327V6.99927H14.9994C17.3855 7.00191 19.6732 7.95097 21.3604 9.63822C23.0477 11.3255 23.9968 13.6131 23.9994 15.9993V22.9992C23.9994 23.2645 23.8941 23.5188 23.7065 23.7063C23.519 23.8939 23.2646 23.9992 22.9994 23.9992ZM8.16941 5.41327L2.29041 11.2923C2.10294 11.4798 1.99762 11.7341 1.99762 11.9993C1.99762 12.2644 2.10294 12.5187 2.29041 12.7063L8.16941 18.5852V15.9993C8.16941 15.734 8.27476 15.4797 8.4623 15.2921C8.64984 15.1046 8.90419 14.9993 9.16941 14.9993H15.9994C17.135 14.9989 18.2576 15.2408 19.2923 15.7088C20.3269 16.1768 21.2498 16.8602 21.9994 17.7133V15.9993C21.9973 14.1434 21.2591 12.3641 19.9468 11.0519C18.6345 9.73956 16.8553 9.00138 14.9994 8.99926H9.16941C8.90419 8.99926 8.64984 8.89391 8.4623 8.70637C8.27476 8.51883 8.16941 8.26448 8.16941 7.99926V5.41327Z" fill="#4B5051">
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_359_781">
                                                        <rect width="24" height="24" fill="white">
                                                    </clipPath>
                                                </defs>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="replied-profile">
                                <div class="main-profile-two">
                                    <div class="user-img-sm">
                                        <img src="assets/images/news/news-user-2.png" alt="travello">
                                    </div>
                                    <div class="user-info">
                                        <h4 class="name-sm">Jenney Bairstow</h4>
                                        <p class="date">Jan 12, 2025</p>
                                        <p class="pera">Chris Jordan is a technical content writer at Travello. he’s a
                                            tech enthusiast,
                                            writer
                                            by day, programmer by night, and always a foodie at heart!</p>
                                        <div class="reply-btn">
                                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <g opacity="0.5" clip-path="url(#clip0_359_791)">
                                                        <path d="M22.9994 23.9994C22.7342 23.9994 22.4798 23.894 22.2923 23.7065C22.1048 23.5189 21.9994 23.2646 21.9994 22.9994C21.9978 21.4086 21.3652 19.8834 20.2403 18.7585C19.1154 17.6336 17.5902 17.001 15.9994 16.9994H10.1694V18.5854C10.1693 18.9809 10.052 19.3675 9.83221 19.6963C9.61244 20.0251 9.30012 20.2814 8.93472 20.4327C8.56932 20.5841 8.16725 20.6237 7.77934 20.5465C7.39144 20.4694 7.03511 20.279 6.75541 19.9994L0.876406 14.1204C0.313993 13.5578 -0.00195313 12.7949 -0.00195312 11.9994C-0.00195313 11.2039 0.313993 10.441 0.876406 9.87838L6.75541 3.99939C7.03511 3.71977 7.39144 3.52936 7.77934 3.45223C8.16725 3.37509 8.56932 3.4147 8.93472 3.56604C9.30012 3.71738 9.61244 3.97365 9.83221 4.30247C10.052 4.63129 10.1693 5.01789 10.1694 5.41339V6.99939H14.9994C17.3855 7.00203 19.6732 7.95109 21.3604 9.63835C23.0477 11.3256 23.9968 13.6132 23.9994 15.9994V22.9994C23.9994 23.2646 23.8941 23.5189 23.7065 23.7065C23.519 23.894 23.2646 23.9994 22.9994 23.9994ZM8.16941 5.41339L2.29041 11.2924C2.10294 11.4799 1.99762 11.7342 1.99762 11.9994C1.99762 12.2645 2.10294 12.5189 2.29041 12.7064L8.16941 18.5854V15.9994C8.16941 15.7342 8.27476 15.4798 8.4623 15.2923C8.64984 15.1047 8.90419 14.9994 9.16941 14.9994H15.9994C17.135 14.999 18.2576 15.2409 19.2923 15.709C20.3269 16.177 21.2498 16.8603 21.9994 17.7134V15.9994C21.9973 14.1435 21.2591 12.3643 19.9468 11.052C18.6345 9.73968 16.8553 9.0015 14.9994 8.99938H9.16941C8.90419 8.99938 8.64984 8.89403 8.4623 8.70649C8.27476 8.51896 8.16941 8.2646 8.16941 7.99939V5.41339Z" fill="#4B5051">
                                                    </g>
                                                    <defs>
                                                        <clippath>
                                                            <rect width="24" height="24" fill="white">
                                                        </clippath>
                                                    </defs>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-profile-two">
                                    <div class="user-img-sm">
                                        <img src="assets/images/news/news-user-3.png" alt="travello">
                                    </div>
                                    <div class="user-info">
                                        <h4 class="name-sm">Steven Smith</h4>
                                        <p class="date">Jan 12, 2025</p>
                                        <p class="pera">Chris Jordan is a technical content writer at Travello. he’s a
                                            tech enthusiast,
                                            writer
                                            by day, programmer by night, and always a foodie at heart!</p>
                                        <div class="reply-btn">
                                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <g opacity="0.5" clip-path="url(#clip0_359_791)">
                                                        <path d="M22.9994 23.9994C22.7342 23.9994 22.4798 23.894 22.2923 23.7065C22.1048 23.5189 21.9994 23.2646 21.9994 22.9994C21.9978 21.4086 21.3652 19.8834 20.2403 18.7585C19.1154 17.6336 17.5902 17.001 15.9994 16.9994H10.1694V18.5854C10.1693 18.9809 10.052 19.3675 9.83221 19.6963C9.61244 20.0251 9.30012 20.2814 8.93472 20.4327C8.56932 20.5841 8.16725 20.6237 7.77934 20.5465C7.39144 20.4694 7.03511 20.279 6.75541 19.9994L0.876406 14.1204C0.313993 13.5578 -0.00195313 12.7949 -0.00195312 11.9994C-0.00195313 11.2039 0.313993 10.441 0.876406 9.87838L6.75541 3.99939C7.03511 3.71977 7.39144 3.52936 7.77934 3.45223C8.16725 3.37509 8.56932 3.4147 8.93472 3.56604C9.30012 3.71738 9.61244 3.97365 9.83221 4.30247C10.052 4.63129 10.1693 5.01789 10.1694 5.41339V6.99939H14.9994C17.3855 7.00203 19.6732 7.95109 21.3604 9.63835C23.0477 11.3256 23.9968 13.6132 23.9994 15.9994V22.9994C23.9994 23.2646 23.8941 23.5189 23.7065 23.7065C23.519 23.894 23.2646 23.9994 22.9994 23.9994ZM8.16941 5.41339L2.29041 11.2924C2.10294 11.4799 1.99762 11.7342 1.99762 11.9994C1.99762 12.2645 2.10294 12.5189 2.29041 12.7064L8.16941 18.5854V15.9994C8.16941 15.7342 8.27476 15.4798 8.4623 15.2923C8.64984 15.1047 8.90419 14.9994 9.16941 14.9994H15.9994C17.135 14.999 18.2576 15.2409 19.2923 15.709C20.3269 16.177 21.2498 16.8603 21.9994 17.7134V15.9994C21.9973 14.1435 21.2591 12.3643 19.9468 11.052C18.6345 9.73968 16.8553 9.0015 14.9994 8.99938H9.16941C8.90419 8.99938 8.64984 8.89403 8.4623 8.70649C8.27476 8.51896 8.16941 8.2646 8.16941 7.99939V5.41339Z" fill="#4B5051">
                                                    </g>
                                                    <defs>
                                                        <clippath>
                                                            <rect width="24" height="24" fill="white">
                                                        </clippath>
                                                    </defs>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-card mt-40">
                                <h4 class="contact-heading">Write Your Comment</h4>
                                <form method="post" class="contact-form">
                                    <div class="row g-4">
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Enter your email">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Your Phone">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="custom-form" type="text" placeholder="Select subject">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea class="custom-form-textarea" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-40">
                                        <button type="submit" class="send-btn">Post Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="pinBox">
                            <?php
                            include('menu_trai/leftdichvu.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Destination -->
    </main>
    <!-- Footer S t a r t -->
    <script src="js/jquery.pinBox.js"></script>
    <script>
        $(document).ready(function() {

            $(".pinBox").pinBox({
                //default 0px
                Top: '30px',
                //default '.container' 
                Container: '#pinBoxContainer',
                //default 20 
                ZIndex: 20,
                //default '767px' if you disable pinBox in mobile or tablet
                MinWidth: '1170px'
                //events if scrolled or window resized 
            });

        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>