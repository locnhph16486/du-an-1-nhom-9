<div class="row">
    <form action="">
        <table border="1" style="border-collapse: collapse; width: 1000px; margin-top:50px">
            <tr style="text-align:center">
                <th>Id hãng</th>
                <th>Tên hãng</th>
                <th>Xử lý</th>
            </tr>
            <?php foreach ($list_trademark as $trademark): ?> 
                <tr>
                    <td><?= $trademark['id'] ?></td>
                    <td><?= $trademark['name'] ?></td>
                    <td><a href="trademark-update?update-trademark=<?= $trademark['id'] ?>">Sửa</a> 
                    <a onclick="return confirm('Bạn có muốn xóa <?php echo $trademark['name']?>')" href="trademark?delete-trademark=<?= $trademark['id'] ?>">Xóa</a></td>
                </tr>
            
            <?php endforeach ?>
        </table>
    </form>
</div>