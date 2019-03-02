<?php
include '../view/admin/header.php';
// Thêm danh mục mới
if (isset($_POST['submit'])) {
    $dm = $_POST['tendm'];
    $cat = new Catalog('',$dm);
    $cat->insert();
};

// Xoa Danh muc
if(isset($_GET['delete']) ) {
    $cat = new Catalog();
    $iddm = $_GET['id'];
      $cat->deleteCat($iddm); 
};
if(isset($_POST['update']) ) {
    $dm = $_POST['tendm'];
    $cat = new Catalog();
    $iddm = $_GET['id'];
    $cat->updateCat($dm,$iddm);

}
?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>Quản Lý </strong> Danh Muc
        </div>


<!-- Nhap danh muc  -->
<?php 
                                      
if(isset($_GET['edit']) && $_GET['id']) {
    $cat = new Catalog();
    $id = $_GET['id'];
    $dsdm =  $cat->getCateById($id);
    extract($dsdm);
    ?>
        <div class="card-body card-block">

            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            
              
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên Danh Muc</label></div>
                    <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="tendm" placeholder="Tên tin tuc" value="<?php echo $dsdm['tendm'] ?>" class="form-control">
                    <small class="form-text text-muted"></small></div>
              
                
                
                
                
                    <button type="submit" name="update" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                
            </form>
        </div>
<!-- Nhap danh muc  -->
<?php }  else { ?>
<!-- trước khi nhap danh muc  -->
<div class="card-body card-block">

            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            
                
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên Danh Muc</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tendm" placeholder="Tên tin tuc" value="" class="form-control"><small class="form-text text-muted"></small></div>
          
                
                
                
              
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
              
            </form>
        </div>
<!-- Het nhap danh muc  -->
<?php } ?>
                                   
    </div>
</div>


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Bảng quản ly Danh Muc</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                    <?php
                        $cate = new Catalog();
                        $dsdm=$cate->getList();
                        foreach ($dsdm as $set) { 
                            extract($set);
                            // $idcate= $set['iddm'];
                            // $name= $set['tendm'];
                            echo '<tr>
                            <td scope="col">'.$set['iddm'].'</td>
                            <td scope="col">'.$set['tendm'].'</td>
                            <td scope="col"><a href="?act=qlcatalog&id='.$set['iddm'].'&edit"><i class="fa fa-pencil"></i></a></td>
                            <td scope="col"><a href="?act=qlcatalog&id='.$set['iddm'].'&delete"><i class="fa fa-trash"></i></a></td>
                                </tr>';
                            }?>
                    
                    
                </thead>
            </table>
        </div>
    </div>
</div>

               
<i class="fa fa-pencil"></i>


<?php
include '../view/admin/footer.php'
?>