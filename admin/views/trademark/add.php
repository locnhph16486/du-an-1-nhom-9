<div class="row">
    <form action="trademark-add" method="post">
        <p>ID Hãng Giày<br>
            <input type="text" name="id" disabled>
        </p>
        <p>
            Tên Hãng Giày<br>
            <input type="text" name="name">
        </p>
            <input type="submit" name="add" value="Thêm Mới" style="margin:15px;">
            <input type="reset" value="Gõ Lại" style="margin:15px;">
        <h4><?php 
        if(isset($done)&&$done!=""&&isset($_POST['add'])) echo "Thêm thành công";
        ?></h4>
    </form>
</div>