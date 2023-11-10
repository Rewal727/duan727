<div class="row margin-b">
    <div class="boxtrai margin-r">
        <div class="row margin-b">
           
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formtk">
                <form action="index.php?act=dangky" method="post">
                    <div class="row margin-b10">
                        Email:
                        <input type="email" name="email" required>
                    </div>
                    <div class="row margin-b10">
                        Tên đăng nhập:
                        <input type="text" name="user" required>
                    </div>
                    <div class="row margin-b10">
                        Mật khẩu:
                        <input type="password" name="pass" required>
                    </div>
                    <div class="row margin-b10">
                        <input type="submit" value="Đăng ký" name="dangky">
                        <input type="reset" value="Nhập lại">
                    </div>      
                </form>
                <h2 class="thongbao" style="font-size: 20px;">
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