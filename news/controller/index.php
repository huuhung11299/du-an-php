
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
        case"tintuc":
            include '../view/website/catalogy.php';
            break;
        case"chitiet":
            include '../view/website/catalogy-detail.php';
            break;
    
             
        default: 
            include '../view/website/home.php';
            break;
    }
?>