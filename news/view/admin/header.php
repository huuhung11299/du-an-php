<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../view/admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../view/admin/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="../view/admin/style.css" rel="stylesheet" />


    <!-- Bootstrap core CSS     -->
    <link href="../view/admin/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../view/admin/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="../view/admin/assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../view/admin/assets/css/demo.css" rel="stylesheet" />
    
    <!-- Sự phức tạp của editor -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../view/admin/editor/css/froala_editor.css">
        <link rel="stylesheet" href="../view/admin/editor/css/froala_style.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/code_view.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/draggable.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/colors.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/emoticons.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/image_manager.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/image.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/line_breaker.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/table.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/char_counter.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/video.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/fullscreen.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/file.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/quick_insert.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/help.css">
        <link rel="stylesheet" href="../view/admin/editor/css/third_party/spell_checker.css">
        <link rel="stylesheet" href="../view/admin/editor/css/plugins/special_characters.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
    <!-- kết thúc sự phức tạp  -->

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../view/admin/assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://fb.com/hungnguyen11299" class="simple-text">
                    Hung Tim
                </a>
            </div>

            <ul class="nav">
                <li class="">
                    <a href="?home">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="?act=qlcatalog">
                        <i class="ti-view-list-alt"></i>
                        <p>Catalog</p>
                    </a>
                </li>
                <li>
                    <a href="?act=qlcatalogdetail">
                        <i class="ti-user"></i>
                        <p>News</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

