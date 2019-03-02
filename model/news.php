<?php
    class news
    {
        var $tieude = null;
        var $noidung = null;
        var $hinhanh = null;
        var $iddm = null;
        var $thoigian = null;
        var $noibat = null;
        var $tacgia = null;
       
        public function __construct()
        {
            if(func_num_args()==7)
            {
                $this->tieude = func_get_arg(0);
                $this->noidung = func_get_arg(1);
                $this->hinhanh = func_get_arg(2);
                $this->iddm = func_get_arg(3);
                $this->thoigian = func_get_arg(4);
                $this->noibat = func_get_arg(5);
                $this->tacgia = func_get_arg(6);
            }
        }
        
            // Lấy danh sách catalog từ database
            function getList(){
                $db = new connect();
                $select = "select * from news";
                $result = $db->getList($select);
                return $result;
            }
            // Lấy phần tử sản phẩm từ from tới to
            public function getListPage($from,$to)
            {
                $db = new connect();
                $select = "SELECT * FROM news order by noibat DESC LIMIT $from, $to";
                $result = $db->getList($select);
                return $result;
            }
    
            function iddm($iddm){
                $sql = "SELECT * FROM news WHERE iddm=? ORDER BY id DESC";
              $result = $db->getList($query);
            }

            // Lấy thông tin chi tiết sản phẩm theo ID
            function getCateById($id){
                $db = new connect();
                $select = "select * from news where ID=$id";
                $result=$db->getInstancse($select);
                return $result;
            }

            //Thêm Tin mới
            function insert(){
                $db = new connect();
                $query = "INSERT INTO news(tieude,noidung,hinhanh,iddm,thoigian,noibat,tacgia) values ('$this->tieude','$this->noidung','$this->hinhanh',$this->iddm,'$this->thoigian',$this->noibat,'$this->tacgia')";
                $db->execute($query);
            }

            // Xoa Tin Tuc
            function deleteNews($id) {
                $db = new connect();
                $query = "DELETE FROM news WHERE ID = $id";
                $db->execute($query);
            }

    }   
?>