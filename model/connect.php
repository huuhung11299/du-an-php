<?php 
    class connect {
        var $db = NULL;
        function __construct() {
            $dsn = "mysql:host=localhost;dbname=TinTuc";
            $user = 'root';
            $pass = 'root';
            $this->db = new PDO($dsn,$user,$pass);
            $this->db->query('set names "utf8"');
            if (!$this->db) {
                return false;
            }
            else {
               return true;
            }
        }
        // Lấy tất cả dữ liệu từ database
        public function getList($select) {
            $result = $this->db->query($select);
            return $result;
        }
        //Tạo phương thức lấy 1 kết quả của bảng
        public function getInstancse($select) {
            $results = $this->db->query($select);
            $result = $results->fetch();
            return $result;
        }
        //Tạo phương thức thực thi các câu lệnh Insert, Update, Delete:
        public function execute($query) {
            $result = $this->db->exec($query);
            return $result;
        }


    }
?>