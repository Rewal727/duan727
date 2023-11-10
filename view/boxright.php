<div class="row margin-b">
    <div class="boxtitle" style="font-weight: 700;">Tài khoản</div>
    <div class="boxcontent formtk">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row margin-b10">
                Xin chào<br>
                <?= $user ?>
            </div>
            <div class="row margin-b10">
                <li>
                    <a href="index.php?act=addtocart">Giỏ hàng</a>
                </li>
                <li>
                    <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                </li>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edittk">Cập nhật tài khoản</a>
                </li>
                    <?php if ($role==1) { ?>
                <li>
                    <a href="admin/index.php">Đăng nhập Admin</a>
                </li>
                    <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>

        <?php
        } else {
        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row margin-b10">
                    Tên đăng nhập<br>
                    <input type="text" name="user">
                </div>
                <div class="row margin-b10">
                    Mật khẩu<br>
                    <input type="password" name="pass">
                </div>
                <div class="row margin-b10">
                    <input type="checkbox" name="">
                    Ghi nhớ tài khoản
                </div>
                <div class="row margin-b10">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </div>

            </form>
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky">Đăng ký thành viên</a>
            </li>
        <?php } ?>
    </div>
</div>
<div class="row margin-b">
    <div class="boxtitle" style="font-weight: 700;">Danh mục</div>
    <div class="boxcontent-mid menudoc">
        <ul>
            <?php foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li>
                            <a href="' . $linkdm . '">' . $name . '</a>
                            </li>';
            } ?>
            <!-- <li>
                        <a href="">PC</a>
                    </li>
                    <li>
                        <a href="">Laptop</a>
                    </li>
                    <li>
                        <a href="">Điện thoại</a>
                    </li>
                    <li>
                        <a href="">Ba lô</a>
                    </li>
                    <li>
                        <a href="">Đồng hồ</a>
                    </li>
                    <li>
                        <a href="">Phụ kiện</a>
                    </li>
                    <li>
                        <a href="">Linh kiện</a>
                    </li> -->
        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" style="width: 175px;">
            <input type="submit" name="timkiem" value="Tìm Kiếm">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle" style="font-weight: 700;">Top 10 yêu thích</div>
    <div class="row boxcontent">
        <?php foreach ($dstop10 as $topsp) {
            extract($topsp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_path . $img;
            echo '<div class="row margin-b10 top10">
                       <a href="' . $linksp . '"> <img src="' . $hinh . '" alt=""> </a>
                        <a href="' . $linksp . '">' . $name . '</a>
                        </div>';
        } ?>
        <!-- <div class="row margin-b10 top10">
                    <img src="images/1.jpg" alt="">
                    <a href="">Laptop 1</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/2.jpg" alt="">
                    <a href="">Laptop 2</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/3.jpg" alt="">
                    <a href="">Laptop 3</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/4.jpg" alt="">
                    <a href="">Laptop 4</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/5.jpg" alt="">
                    <a href="">Laptop 5</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/1.jpg" alt="">
                    <a href="">Laptop 1</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/2.jpg" alt="">
                    <a href="">Laptop 2</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/3.jpg" alt="">
                    <a href="">Laptop 3</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/4.jpg" alt="">
                    <a href="">Laptop 4</a>
                </div>
                <div class="row margin-b10 top10">
                    <img src="images/5.jpg" alt="">
                    <a href="">Laptop 5</a>
                </div> -->
    </div>
</div>