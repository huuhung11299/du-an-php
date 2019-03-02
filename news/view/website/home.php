 <!-- day la header -->
<?php
include "header.php";
?>
<!-- ##### Breaking News Area Start ##### -->
<section class="breaking-news-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                        <div class="title">
                            <h6>Trending</h6>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                            <?php
                            $cate = new news();
                            $dsdm = $cate->getListPage(0,3);
                            foreach ($dsdm as $set) {
                                extract($set);
                                $idcate= $set['ID'];
                                $name= $set['tieude'];
                                echo'<li><a href="?act=chitiet&idcate='.$idcate.'">'.$name.'</a></li>';
                            }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Blog Post Area -->

                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="../view/website/img/bg-img/1.jpg" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Traffic Problems in Time Square</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="../view/website/img/bg-img/2.jpg" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">The best way to spend your holliday</a>
                                </div>
                            </div>
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="../view/website/img/bg-img/3.jpg" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Sport results for the weekend games</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="../view/website/img/bg-img/1.jpg" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Traffic Problems in Time Square</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="../view/website/img/bg-img/2.jpg" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">The best way to spend your holliday</a>
                                </div>
                            </div>
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="../view/website/img/bg-img/3.jpg" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Sport results for the weekend games</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Intro News Area Start ##### -->
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>Tất cả Tin Tức</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="" role="tab" aria-controls="nav-1" aria-selected="true">Tin Noi Bat</a>
                                    
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">


                                    <!-- Single News Area -->
                                    <!-- tin to -->
                                    <?php
                                        $speci = new news();
                                        $dsspeci = $speci->getListPage(0,2);
                                        foreach ($dsspeci as $spe) {
                                            extract($spe);
                                            $id = $spe['ID'];
                                            $name = $spe['tieude'];
                                            $times = $spe['thoigian'];
                                            $author = $spe['tacgia'];
                                            $hinh = '../view/upload/'.$spe['hinhanh'];
                                            if(is_file($hinh)){
                                                $hinh=$hinh;
                                            }else{
                                                $hinh="no data";
                                            }
                                            echo '<div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">

                                            <div class="blog-thumbnail">
                                                    <a href="?act=chitiet&idcate='.$id.'"><img src="'.$hinh.'" alt=""></a>
                                                </div>
    

                                                <div class="blog-content">
                                                    <span class="post-date">'.$times.'</span>
                                                    <a href="?act=chitiet&idcate='.$id.'" class="post-title">'.$name.'</a>

                                                    <a href="?act=chitiet&idcate='.$id.'" class="post-author">By '.$author.'</a>
                                                </div>
                                            </div>
                                        </div>';
                                        }  ?>


                                        <!-- Tin Nho  -->
                                        <?php
                                            $specimin = new news();
                                            $dsspecimin = $specimin->getListPage(3,6);
                                            foreach ($dsspecimin as $spem){
                                                extract($spem);
                                                $id = $spem['ID'];
                                                $name = $spem['tieude'];
                                                $times = $spem['thoigian'];
                                                $author = $spem['tacgia'];
                                                $hinh = '../view/upload/'.$spem['hinhanh'];
                                                if(is_file($hinh)){
                                                    $hinh=$hinh;
                                                }else{
                                                    $hinh="no data";
                                                }
                                                echo '<div class="col-12 col-sm-6">
                                                            <div class="single-blog-post d-flex style-4 mb-30">
                                                                <div class="blog-thumbnail">
                                                                    <a href="?act=chitiet&idcate='.$id.'"><img src="'.$hinh.'" alt=""></a>
                                                                </div>

                                                                <div class="blog-content">
                                                                    <span class="post-date">'.$times.'</span>
                                                                    <a href="?act=chitiet&idcate='.$id.'" class="post-title">'.$name.'</a>
                                                                </div>
                                                            </div>
                                                        </div>   ';
                                                }
                                            ?>
                                            
                                    <!-- Tin nho  -->
                                    <!-- Single News Area -->
                                    


                                    
                                </div>
                            </div>
                            <!--  hết menu noi bat -->
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4>Subscribe to our newsletter</h4>
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                            </form>
                            <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                        </div>

                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                                <img src="../view/website/img/bg-img/add3.png" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Intro News Area End ##### -->
    <!-- Intro News Filter -->
    <div class="container">
        <div class="intro-news-filter d-flex justify-content-between">
            <h6>Tất cả Tin Tức</h6>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Tin Khong Nổi Bậc</a>  
            </nav>
        </div>
    </div>

    <!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">

                <!-- Single News Area -->
                        <?php
                        $tin = new news();
                        $tinbt = $tin->getListPage(9,6);
                        foreach ($tinbt as $set){
                            extract($set);
                            $id = $set['ID'];
                            $name = $set['tieude'];
                            $day = $set['ngaythang'];
                            $author = $set['tacgia'];
                            $hinh = '../view/upload/'.$set['hinhanh'];
                                if(is_file($hinh)){
                                    $hinh=$hinh;
                                }else{
                                    $hinh="no data";
                                }
                                echo'<div class="col-12 col-sm-6 col-lg-4">
                                        <div class="single-blog-post style-2 mb-5">
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="'.$hinh.'" alt=""></a>
                                            </div>
                    
                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">'.$day.'</span>
                                                <a href="#" class="post-title">'.$name.'</a>
                                                <a href="#" class="post-author">By '.$author.'</a>
                                            </div>
                                        </div>
                                    </div> ';
                        }
                        ?>
                

                <div class="col-12">
                    <div class="load-more-button text-center">
                        <a href="#" class="btn newsbox-btn">Load More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Top News Area End ##### -->

    <!-- ##### Add Area Start ##### -->
    <div class="big-add-area mb-100">
        <div class="container-fluid">
            <a href="#"><img src="../view/website/img/bg-img/add2.png" alt=""></a>
        </div>
    </div>
    <!-- ##### Add Area End ##### -->
    <!-- day la footer -->
<?php 
    include "footer.php";
?>
