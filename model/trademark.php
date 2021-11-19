<?php
    // Hiển thị tất cả danh mục
    function loadAll_shoes_brand(){
        $sql="SELECT * FROM shoe_brand order by id desc";
        $list_trademark=pdo_query($sql);
        return $list_trademark;
    }
    // Thêm mới danh mục
    function insert_shoe_brand($name){
        $sql="INSERT INTO shoe_brand (name) values ('$name') ";
        pdo_execute($sql);
    }
    // Sửa danh mục
    function update_shoe_brand($id,$name){
        $sql="UPDATE shoe_brand set name='$name' where id=$id";
        pdo_execute($sql);
    }
    // Xóa danh mục
    function delete_shoe_brand($id){
        $sql="DELETE FROM shoe_brand where id=$id";
        pdo_execute($sql);
    }
?>