<div class="row">
    <div class="row formtitle margin-b">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdm as $dm) {
                extract($dm);
                echo '<option value="'.$id.'">'.$name.'</option>';
            } ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row formcontent">
        <div class="row margin-b10 formds">

            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php foreach ($listsp as $sp) {
                    extract($sp);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $img_path = "../upload/" . $img;
                    if (is_file($img_path)) {
                        $hinh = "<img src='" . $img_path . "' height='80'>";
                    } else {
                        $hinh = "No photo";
                    }
                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $luotxem . '</td>
                        <td><a href=' . $suasp . '><input type="button" value="Sửa"></a> <a href=' . $xoasp . '><input type="button" value="Xóa"></a></td>
                    </tr>';
                } ?>

            </table>
        </div>
        <div class="row margin-b10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>