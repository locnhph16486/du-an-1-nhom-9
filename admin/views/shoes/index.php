<div class="row">
    <form action="">
        <table border="1" style="border-collapse: collapse; width: 1000px; margin-top:50px">
            <tr style="text-align:center">
                <th>Id giày</th>
                <th>Tên hãng</th>
                <th>Tên giày</th>
                <th>Giá</th>
                <th>Ảnh chính</th>
                <th>Like</th>
                <th>Giảm giá</th>
                <th>Xử lý</th>
            </tr>
            <?php foreach ($list_shoes as $shoes): ?> 
                <tr>
                    <td><?= $shoes['id'] ?></td>
                    <?php 
                    // foreach ($list_trademark as $trademark)){}
                    //     if($trademark['id']==$shoes['id_brand']){
                    //         return $trademark_name="done";
                    //     }
                    // }
                    ?> 
                    <td><?=$shoes['id_brand']?></td>
                    <td><?= $shoes['name'] ?></td>
                    <td><?= $shoes['price'] ?></td>
                    <td><img width="200px" src="./upload/<?= $shoes['image_main'] ?>" alt=""></td>
                    <td><?= $shoes['painted'] ?></td>
                    <td><?= $shoes['sale'] ?></td>
                    <td>
                        <a href="">Chi tiết</a>
                        <a href="trademark-update?update-trademark=<?= $trademark['id'] ?>">Sửa</a> 
                        <a onclick="return confirm('Bạn có muốn xóa <?php echo $shoes['name']?>')" href="shoes?delete-shoes=<?= $shoes['id'] ?>">Xóa</a>
                    </td>
                </tr>
            
            <?php endforeach ?>
        </table>
    </form>
</div>