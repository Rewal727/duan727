<div class="row margin-b">
    <div class="boxtrai margin-r">
        <div class="row margin-b">
           
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtk">
                <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edittk" method="post">
                    <div class="row margin-b10">
                        Email:
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row margin-b10">
                        Tên đăng nhập:
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row margin-b10">
                        Mật khẩu:
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row margin-b10">
                        Địa chỉ:
                        <input type="text" placeholder="Nhập địa chỉ" name="address" value="<?=$address?>">
                    </div>
                    <div class="row margin-b10">
                        Điện thoại:
                        <input type="text" placeholder="Nhập số điện thoại" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row margin-b10">

                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>      
                </form>
                <h2 class="thongbao">
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
        
    </div>
    <div class="boxphai">
       <?php include "view/boxright.php";?>
    </div>
</div>