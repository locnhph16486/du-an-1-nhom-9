<?php 
//&&isset($_POST['image_main'])&&isset($_POST['image_1'])&&isset($_POST['image_2'])&&isset($_POST['image_3'])
// if(isset($_POST['add'])&&isset($_POST['id_brand'])&&isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['painted'])&&isset($_POST['favor'])&&isset($_POST['sale'])){
//     $ok="OKKKKKKKKKKKKKKKKK";
//     if($_FILES['image_main']['error']){
//         $error = 'Lỗi hình ảnh!';
//     }else if($_FILES['image_1']['error']){
//         $error_1 = 'Lỗi hình ảnh!';
//     }
//     else if($_FILES['image_1']['error']){
//         $error_2 = 'Lỗi hình ảnh!';
//     }
//     else if($_FILES['image_1']['error']){
//         $error_3 = 'Lỗi hình ảnh!';
//     }
//     else{
//         $fileName = $_FILES['image_main']['name'];
//         $fileSize = $_FILES['image_main']['size'];
//         $fileExt = pathinfo($fileName,PATHINFO_EXTENSION);
//         $fileTemp = $_FILES['image_main']['tmp_name'];
//         //
//         $fileName_1 = $_FILES['image_1']['name'];
//         $fileSize_1 = $_FILES['image_1']['size'];
//         $fileExt_1 = pathinfo($fileName_1,PATHINFO_EXTENSION);
//         $fileTemp_1 = $_FILES['image_1']['tmp_name'];
//         //
//         $fileName_2 = $_FILES['image_2']['name'];
//         $fileSize_2 = $_FILES['image_2']['size'];
//         $fileExt_2 = pathinfo($fileName_2,PATHINFO_EXTENSION);
//         $fileTemp_2 = $_FILES['image_2']['tmp_name'];
//         //
//         $fileName_3 = $_FILES['image_3']['name'];
//         $fileSize_3 = $_FILES['image_3']['size'];
//         $fileExt_3 = pathinfo($fileName_3,PATHINFO_EXTENSION);
//         $fileTemp_3 = $_FILES['image_3']['tmp_name'];
//         //
//         $arrayImg = array('jpg','png');
//         if($fileSize > 2000000){
//             $img = "File không được lớn hơn 2MB";
//         }
//         else if(!in_array($fileExt,$arrayImg)){
//             $img = "File phải đúng dạng JPG or PNG";
//         }
//         //
//         if($fileSize_1 > 2000000){
//             $img_1= "File không được lớn hơn 2MB";
//         }
//         else if(!in_array($fileExt_1,$arrayImg)){
//             $img_1= "File phải đúng dạng JPG or PNG";
//         }
//         //
//         if($fileSize_2 > 2000000){
//             $img_2= "File không được lớn hơn 2MB";

//         }
//         else if(!in_array($fileExt_2,$arrayImg)){
//             $img_2= "File phải đúng dạng JPG or PNG";
//         }
//         //
//         if($fileSize_3 > 2000000){
//             $img_3= "File không được lớn hơn 2MB";
//         }
//         else if(!in_array($fileExt_3,$arrayImg)){
//             $img_3= "File phải đúng dạng JPG or PNG";
//         }
//         if(!isset($img)&&!isset($img_1)&&!isset($img_2)&&!isset($img_3)){
//             echo "ENDDDDDDDDDDDDDDDDDDDDD";
//             $up = './upload/'.$fileName;
//             $up_1 = './upload/'.$fileName_1;
//             $up_2 = './upload/'.$fileName_2;
//             $up_3 = './upload/'.$fileName_3;
//             move_uploaded_file($fileTemp,$up);
//             move_uploaded_file($fileTemp_1,$up_1);
//             move_uploaded_file($fileTemp_2,$up_2);
//             move_uploaded_file($fileTemp_3,$up_3);
//             $doneFile = "Tải File thành công";
//         }
//     }
// }
?>
<div class="row">
    <form enctype="multipart/form-data"  method="post">
        <p>ID Giày<br>
            <input type="text" name="id" disabled>
        </p>
        <p>
            Tên Hãng Giày<br>
            <select name="id_brand" >
                <?php foreach ($list_trademark as $trademark): ?> 
                    <option value="<?php echo $trademark['id'] ?>"><?php echo $trademark['name'] ?></option>
                <?php endforeach ?>
            </select>
        </p>
        <p>
            Tên Giày<br>
            <input type="text" name="name">
        </p>
        <p>
            Giá<br>
            <input type="text" name="price">
        </p>
        <p>
            Ảnh Chính<br>
            <input type="file" name="image_main">
            <?php
                if($doneFile!=""){
                    echo $doneFile;
                }
            ?>
        </p>
        <p>
            Ảnh Phụ 1<br>
            <input type="file" name="image_1" >
        </p>
        <p>
            Ảnh Phụ 2<br>
            <input type="file" name="image_2" >
        </p>
        <p>
            Ảnh Phụ 3<br>
            <input type="file" name="image_3" >
        </p>
        <p>
            Mô Tả <br>
            <textarea name="painted" id="" cols="40" rows="10"></textarea>
        </p>
        <p>
            Like<br>
            <input type="text" name="favor">
        </p>
        <p>
            Giảm Giá<br>
            <input type="text" name="sale">
        </p>
            <input type="submit" name="add" value="Thêm Mới" style="margin:15px;">
            <input type="reset" value="Gõ Lại" style="margin:15px;">
        <h4><?php 
        if(isset($done)&&$done!=""&&isset($_POST['add'])) {
            echo "Thêm thành công";
        }
        ?></h4>
    </form>
</div>