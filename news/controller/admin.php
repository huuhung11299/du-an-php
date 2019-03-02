<?php 
include ('../model/cat.php');
include ('../model/connect.php');
include ('../model/news.php');
 
    if(isset($_GET['act']))
    {
        $action=$_GET['act'];
    }
    else
    {
        $action="";
    }
    switch ($action)
    {
        case"qlcatalog":
            include '../view/admin/qlcatalog.php';
            break;
        case"qlcatalogdetail":
            include '../view/admin/qlcatalog-detail.php';
            break;
              
        
        default: 
            include '../view/admin/home.php';
            break;
    }
?>
