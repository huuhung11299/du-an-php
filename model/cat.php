<?php
    /*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products
 *
 * @author Nguyen Huu Hung
 */
class Catalog {
    var $iddm = null;
    var $tendm = null;
    
    function __construct() {
        if(func_num_args()==2){
            $this->iddm = func_get_arg(0);
            $this->tendm = func_get_arg(1);
        }
    }
    // Lấy danh sách catalog từ database
    function getList(){
         $db = new connect();
         $select = "select * from danhmuc";
         $result = $db->getList($select);
         return $result;
    }
     
     public function getListPage($form,$to) {
        $db = new connect();
        $select = "SELECT * FROM danhmuc ORDER BY iddm DESC LIMIT $form ,$to";
        $result = $db->getList($select);
        return $result;
    }
     
     // Lấy thông tin chi tiết sản phẩm theo IDdm
     function getCateById($iddm){
         $db = new connect();
         $select = "select * from danhmuc where iddm=$iddm";
         $result=$db->getInstancse($select);
         return $result;
    }
    //Thêm danh muc mới
     function insert(){
        $db = new connect();
        $query = "insert into danhmuc(tendm) values ('$this->tendm')";
        $db->execute($query);
    }

    // Xoa Danh Muc
    function deleteCat($iddm) {
        $db = new connect();
        $query = "DELETE FROM danhmuc WHERE iddm = $iddm";
        $db->execute($query);
    }
    // update danh muc
    function updateCat($tendm,$iddm){
        $db = new connect();
        $query = "UPDATE danhmuc SET tendm='$tendm' WHERE iddm=$iddm";
        $db->execute($query);
    }
}
?>