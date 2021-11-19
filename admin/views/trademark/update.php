<div class="row">
    <form action="" method="post">
        <p>ID Hãng Giày<br>
            <input type="text" name="id" disabled>
        </p>
        <p>
            Tên Hãng Giày<br>
            <input type="text" name="name">
        </p>
            <input type="submit" name="update" value="Sửa" style="margin:15px;">
            <input type="reset" value="Gõ Lại" style="margin:15px;">
        <h4><?php 
            if(isset($done)&&$done!="") echo "Sửa thành công";
            else echo "Sửa không thành công";
        ?></h4>
    </form>
</div>