<?php 
    // Hiển thị tất cả danh mục
    function loadAll_shoes(){
        $sql="SELECT * FROM shoes order by id desc";
        $list_shoes=pdo_query($sql);
        return $list_shoes;
    }
    // Thêm mới danh mục
    function insert_shoe($id_brand,$name,$price,$image_main,$image_1,$image_2,$image_3,$painted,$favor,$sale){
        $sql="INSERT INTO shoes (id_brand,name,price,image_main,image_1,image_2,image_3,painted,favor,sale) values ('$id_brand','$name','$price','$image_main','$image_1','$image_2','$image_3','$painted','$favor','$sale') ";
        pdo_execute($sql);
    }
    // Sửa danh mục
    function update_shoe($id,$id_brand,$name,$price,$image_main,$image_1,$image_2,$image_3,$painted,$favor,$sale){
        // if($image_main=null){
        //     $sql="UPDATE shoes set id_brand=$id_brand , name='$name' , price = '$price' ,image_1='$image_1',image_2='$image_2',image_3='$image_3',painted='$painted',favor='$favor',sale='$sale' where id=$id";
        // }
        // else if($image_1=""){
        //     $sql="UPDATE shoes set id_brand=$id_brand , name='$name' , price = '$price' ,image_main = '$image_main',image_2='$image_2',image_3='$image_3',painted='$painted',favor='$favor',sale='$sale' where id=$id";
        // }else if($image_2=""){
        //     $sql="UPDATE shoes set id_brand=$id_brand , name='$name' , price = '$price' ,image_main = '$image_main',image_1='$image_1',image_3='$image_3',painted='$painted',favor='$favor',sale='$sale' where id=$id";
        // }
        // else if($image_3=""){
        //     $sql="UPDATE shoes set id_brand=$id_brand , name='$name' , price = '$price' ,image_main = '$image_main',image_1='$image_1',image_2='$image_2',painted='$painted',favor='$favor',sale='$sale' where id=$id";
        // }else if($image_main=""&&$image_1=""&&$image_2=""&&$image_3=""){
        //     $sql="UPDATE shoes set id_brand=$id_brand , name='$name' , price = '$price',painted='$painted',favor='$favor',sale='$sale' where id=$id";
        // }
        // else{
            $sql="UPDATE shoes set id_brand=$id_brand , name='$name' , price = '$price' ,image_main = '$image_main',image_1='$image_1',image_2='$image_2',image_3='$image_3',painted='$painted',favor='$favor',sale='$sale' where id=$id";
        // }
        pdo_execute($sql);
    }
    // Xóa danh mục
    function delete_shoe($id){
        $sql="DELETE FROM shoes where id=$id";
        pdo_execute($sql);
    }
?>