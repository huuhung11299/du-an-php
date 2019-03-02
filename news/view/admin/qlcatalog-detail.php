<?php
include '../view/admin/header.php';

// Thêm Tin mới 
if (isset($_POST['submit'])) {
    $title = $_POST['tieude'];
    $content = $_POST['noidung'];

    // hinh anh 
    $images       = $_FILES['hinh']['name'];
    if(!empty($images)) {
        $tmp = $_FILES['hinh']['tmp_name'];
        $images  = time().$images; // noi ten anh 
        $new_path = "../view/upload/".$images;
        
        if (!move_uploaded_file($tmp,$new_path)) {
            $error = " upload that bai ";
        }
        else {
            move_uploaded_file($tmp,$new_path);
        }
    }
    else {
        $error = " Anh khong duoc de trong ";
    }
    // noi bat 
    $special      = "";
    if (isset($_POST['noibat'])) {
        $special = 1;
    }
    else {
        $special = 0;
    }
    // danh muc
    $id_dm= $_POST['danhmuc'];

    // thoi gian 
    $times = $_POST['thoigian'];

    // tac gia
    $author = $_POST['tacgia'];

    $news = new news($title,$content,$images,$id_dm,$times,$special,$author);
    $news->insert();
};
// Het phan them tin tuc

// Xoa Tin Tuc
if(isset($_GET['delete']) ) {
    $news = new news();
    $id = $_GET['id'];
      $news->deleteNews($id);  
};

?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>Quản Lý </strong> New
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

            <!-- tieu de  -->
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên Tin Tuc</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tieude" placeholder="Tên tin tuc" value="" class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <!-- tac gia  -->
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên Tac Gia</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tacgia" placeholder="Tên tac gia" value="" class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <!-- sự phức tạp  -->
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Chi Tiet</label>
                    </div>
                    <div class="col-12 col-md-9" >
                        <div id="editor">
                            <textarea id='edit' name="noidung"  >
                            
                            </textarea>
                        </div>
                    </div>
                </div>
                <!-- hết sự phức tạp  -->



                    <!-- ngay thang  -->
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ngay Thang</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="text-input" name="thoigian" placeholder="Nhap ngay thang" value="" class="form-control"><small class="form-text text-muted"></small></div>
                </div>

                <!-- noi bat  -->
                <div class="row form-group">
                    <div class="col col-md-3">
                    <label class=" form-control-label">
                        <i class="fa fa-ticket" aria-hidden="true"></i>Nổi bật
                    </label>
                    </div>
                    <div class="col col-md-9">
                        <span class="icons" class="" style="display:none;"></span>
                        <input type="checkbox" name="noibat" class="" placeholder="Nổi bật">
                    </div>
                </div>

                <!-- hinh  -->
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chon Hình</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="hinh" class="form-control-file"></div>
                </div>

                <!-- danh muc -->
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Danh Muc</label></div>
                    <div class="col-12 col-md-9">
                    <select name="danhmuc" class="form-control pro-edt-select form-control-primary">
                        <?php
                            $list_catlog = new Catalog();
                            $dslist = $list_catlog->getList();
                            foreach ($dslist as $dslist) {
                                extract($dslist);
                            echo '<option value="'.$dslist['iddm'].'">'.$dslist['tendm'].'</option>';}
                        ?>
            
                    </select>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col-12 col-md-9"><input type="hidden" id="file-input" value="" name="maalb" class="form-control-file"></div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>

        </form>
        </div>
    
    </div>
    </div>


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Bảng quản Tin Tuc</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    
                    <th scope="col">STT</th>
                    <th scope="col">Tên Tin Tuc</th>
                    <th scope="col">Ten Tac Gia</th>
                    <th scope="col">Chi Tiet</th>
                    <th scope="col">Ngay Thang</th>
                    <th scope="col">Noi Bat</th>
                    <!-- <th scope="col">Danh Muc</th> -->
                    <th scope="col" >Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
                <?php
                        $cate = new news();
                        $dsdm=$cate->getList();
                        foreach ($dsdm as $set) { 
                            extract($set);
                            // $idcate= $set['iddm'];
                            // $name= $set['tendm'];
                            echo '<tr>
                            <td scope="col">'.$set['ID'].'</td>
                            <td scope="col">'.$set['tieude'].'</td>
                            <td scope="col">'.$set['tacgia'].'</td>
                            <td scope="col">'.$set['noidung'].'</td>
                            <td scope="col">'.$set['thoigian'].'</td>
                            <td scope="col">'.$set['noibat'].'</td>
                            <td scope="col"><i class="fa fa-pencil"></i></td>
                            <td scope="col"><a href="?act=qlcatalogdetail&id='.$set['ID'].'&delete"><i class="fa fa-trash"></i></a></td>
                        </tr>';
                            }?>
                

                </thead>
                
            </table>
        </div>
    </div>
</div>

               



<?php
include '../view/admin/footer.php'
?>