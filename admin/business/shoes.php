<?php
    
    function shoes_index(){
        admin_render('shoes/index.php',loadAll_shoes(),loadAll_shoes_brand());
    }
    function shoes_delele(){
        if(isset($_GET['delete-shoes'])&&($_GET['delete-shoes']>0)){
            delete_shoe($_GET['delete-shoes']);
        }
    }
    function shoes_add(){
        $done="";
        $doneFile="";
        if(isset($_POST['add'])&&isset($_POST['id_brand'])&&isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['painted'])&&isset($_POST['favor'])&&isset($_POST['sale'])){
            if($_FILES['image_main']['error']){
                $error = 'Lỗi hình ảnh!';
            }else if($_FILES['image_1']['error']){
                $error_1 = 'Lỗi hình ảnh!';
            }
            else if($_FILES['image_1']['error']){
                $error_2 = 'Lỗi hình ảnh!';
            }
            else if($_FILES['image_1']['error']){
                $error_3 = 'Lỗi hình ảnh!';
            }
            else{
                $fileName = $_FILES['image_main']['name'];
                $fileSize = $_FILES['image_main']['size'];
                $fileExt = pathinfo($fileName,PATHINFO_EXTENSION);
                $fileTemp = $_FILES['image_main']['tmp_name'];
                //
                $fileName_1 = $_FILES['image_1']['name'];
                $fileSize_1 = $_FILES['image_1']['size'];
                $fileExt_1 = pathinfo($fileName_1,PATHINFO_EXTENSION);
                $fileTemp_1 = $_FILES['image_1']['tmp_name'];
                //
                $fileName_2 = $_FILES['image_2']['name'];
                $fileSize_2 = $_FILES['image_2']['size'];
                $fileExt_2 = pathinfo($fileName_2,PATHINFO_EXTENSION);
                $fileTemp_2 = $_FILES['image_2']['tmp_name'];
                //
                $fileName_3 = $_FILES['image_3']['name'];
                $fileSize_3 = $_FILES['image_3']['size'];
                $fileExt_3 = pathinfo($fileName_3,PATHINFO_EXTENSION);
                $fileTemp_3 = $_FILES['image_3']['tmp_name'];
                //
                $arrayImg = array('jpg','png');
                if($fileSize > 2000000){
                    $img = "File không được lớn hơn 2MB";
                }
                else if(!in_array($fileExt,$arrayImg)){
                    $img = "File phải đúng dạng JPG or PNG";
                }
                //
                if($fileSize_1 > 2000000){
                    $img_1= "File không được lớn hơn 2MB";
                }
                else if(!in_array($fileExt_1,$arrayImg)){
                    $img_1= "File phải đúng dạng JPG or PNG";
                }
                //
                if($fileSize_2 > 2000000){
                    $img_2= "File không được lớn hơn 2MB";
        
                }
                else if(!in_array($fileExt_2,$arrayImg)){
                    $img_2= "File phải đúng dạng JPG or PNG";
                }
                //
                if($fileSize_3 > 2000000){
                    $img_3= "File không được lớn hơn 2MB";
                }
                else if(!in_array($fileExt_3,$arrayImg)){
                    $img_3= "File phải đúng dạng JPG or PNG";
                }
                if(!isset($img)&&!isset($img_1)&&!isset($img_2)&&!isset($img_3)){
                    echo "ENDDDDDDDDDDDDDDDDDDDDD";
                    $up = './upload/'.$fileName;
                    $up_1 = './upload/'.$fileName_1;
                    $up_2 = './upload/'.$fileName_2;
                    $up_3 = './upload/'.$fileName_3;
                    move_uploaded_file($fileTemp,$up);
                    move_uploaded_file($fileTemp_1,$up_1);
                    move_uploaded_file($fileTemp_2,$up_2);
                    move_uploaded_file($fileTemp_3,$up_3);
                    $doneFile = "Tải File thành công";
                }
            }
        }
        if(isset($_POST['add'])&&isset($_POST['id_brand'])&&isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['painted'])&&isset($_POST['favor'])&&isset($_POST['sale'])){
            insert_shoe($_POST['id_brand'],$_POST['name'],$_POST['price'],$fileName,$fileName_1,$fileName_2,$fileName_3,$_POST['painted'],$_POST['favor'],$_POST['sale']);
            if($doneFile!=""){
                $done="DONE";
            }
        }
        admin_add('shoes/add.php',$done,$doneFile,loadAll_shoes_brand());
    }
    function shoes_update(){
        $done="";
        $doneFile="";
        $fileName ="";
        $fileName_1 ="";
        $fileName_2 ="";
        $fileName_3 ="";
        if(isset($_POST['update'])&&isset($_POST['id_brand'])&&isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['painted'])&&isset($_POST['favor'])&&isset($_POST['sale'])){
            if($_FILES['image_main']['error']){
                $error = 'Lỗi hình ảnh!';
            }else if($_FILES['image_1']['error']){
                $error_1 = 'Lỗi hình ảnh!';
            }
            else if($_FILES['image_1']['error']){
                $error_2 = 'Lỗi hình ảnh!';
            }
            else if($_FILES['image_1']['error']){
                $error_3 = 'Lỗi hình ảnh!';
            }
            else{
                $fileName = $_FILES['image_main']['name'];
                $fileSize = $_FILES['image_main']['size'];
                $fileExt = pathinfo($fileName,PATHINFO_EXTENSION);
                $fileTemp = $_FILES['image_main']['tmp_name'];
                //
                $fileName_1 = $_FILES['image_1']['name'];
                $fileSize_1 = $_FILES['image_1']['size'];
                $fileExt_1 = pathinfo($fileName_1,PATHINFO_EXTENSION);
                $fileTemp_1 = $_FILES['image_1']['tmp_name'];
                //
                $fileName_2 = $_FILES['image_2']['name'];
                $fileSize_2 = $_FILES['image_2']['size'];
                $fileExt_2 = pathinfo($fileName_2,PATHINFO_EXTENSION);
                $fileTemp_2 = $_FILES['image_2']['tmp_name'];
                //
                $fileName_3 = $_FILES['image_3']['name'];
                $fileSize_3 = $_FILES['image_3']['size'];
                $fileExt_3 = pathinfo($fileName_3,PATHINFO_EXTENSION);
                $fileTemp_3 = $_FILES['image_3']['tmp_name'];
                //
                $arrayImg = array('jpg','png');
                if($fileSize > 2000000){
                    $img = "File không được lớn hơn 2MB";
                }
                else if(!in_array($fileExt,$arrayImg)){
                    $img = "File phải đúng dạng JPG or PNG";
                }
                //
                if($fileSize_1 > 2000000){
                    $img_1= "File không được lớn hơn 2MB";
                }
                else if(!in_array($fileExt_1,$arrayImg)){
                    $img_1= "File phải đúng dạng JPG or PNG";
                }
                //
                if($fileSize_2 > 2000000){
                    $img_2= "File không được lớn hơn 2MB";
        
                }
                else if(!in_array($fileExt_2,$arrayImg)){
                    $img_2= "File phải đúng dạng JPG or PNG";
                }
                //
                if($fileSize_3 > 2000000){
                    $img_3= "File không được lớn hơn 2MB";
                }
                else if(!in_array($fileExt_3,$arrayImg)){
                    $img_3= "File phải đúng dạng JPG or PNG";
                }
                if(!isset($img)&&!isset($img_1)&&!isset($img_2)&&!isset($img_3)){
                    echo "ENDDDDDDDDDDDDDDDDDDDDD";
                    $up = './upload/'.$fileName;
                    $up_1 = './upload/'.$fileName_1;
                    $up_2 = './upload/'.$fileName_2;
                    $up_3 = './upload/'.$fileName_3;
                    move_uploaded_file($fileTemp,$up);
                    move_uploaded_file($fileTemp_1,$up_1);
                    move_uploaded_file($fileTemp_2,$up_2);
                    move_uploaded_file($fileTemp_3,$up_3);
                    $doneFile = $fileName;
                }
            }
        }
        if(isset($_POST['update'])){
            update_shoe($_GET['update-shoes'],$_POST['id_brand'],$_POST['name'],$_POST['price'],$fileName,$fileName_1,$fileName_2,$fileName_3,$_POST['painted'],$_POST['favor'],$_POST['sale']);
            if($doneFile!=""){
                $done="DONE";
            }
        }
        
        admin_update('shoes/update.php',$done,$doneFile,[]);
    }
?>