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
            <input type="submit" name="update" value="Update" style="margin:15px;">
            <input type="reset" value="Gõ Lại" style="margin:15px;">
        <h4><?php 
        if(isset($done)&&$done!=""&&isset($_POST['update'])) {
            echo "Sua thành công";
        }
        ?></h4>
    </form>
</div>