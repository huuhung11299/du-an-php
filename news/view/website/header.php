<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="../view/website/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../view/website/style.css">

    <title>Tin Tức</title>
</head>
<body>
      <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="?home" class="nav-brand"><img src="../view/website/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="?home">Trang Chủ</a></li>
                                    <li><a href="?act=tintuc">Tin Tức</a></li>                                        
                                    </li>
                                    <li><a href="#">Danh Mục</a>
                                        <ul class="dropdown">
                                        <?php
                                            $cate = new Catalog();
                                            $dsdm=$cate->getList();
                                            foreach ($dsdm as $set) { 
                                                extract($set);
                                                // $idcate= $set['iddm'];
                                                // $name= $set['tendm'];
                                                echo '<li><a href="?act=tintuc&idcate='.$set['iddm'].'">'.$set['tendm'].'</a></li>';
                                            }
                                            
                                        ?>
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->