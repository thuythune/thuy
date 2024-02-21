<?php
    include "database.php";
?>

<?php

    class cartegory {
        private $db;
        public function __construct(){
            $this -> db = new database();
        }
        public function insert_cartegory($cartegory_name) {
            $quety = "INSERT INTO tbl_cartegory(cartegory_name) VALUES ('$cartegory_name')";
            $result = $this -> db -> insert($query);
            return $result;
        }
    }
?>