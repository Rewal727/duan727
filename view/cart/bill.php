<div class="row margin-b">
    <div class="boxtrai margin-r">
        <form action="index.php?act=billconfirm" method="post">
            <div class="row margin-b">
            
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>
                        <?php 

                            if (isset($_SESSION['user'])) {
                                $user = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            }else{
                                $user="";
                                $address="";
                                $email="";
                                $tel="";
                            }

                        ?>
                        
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="user" value="<?=$user?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                            
                        

                    </table>
                </div>
            </div>
            
            <div class="row margin-b">
            
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" value="2" name="pttt" >Chuyển khoản ngân hàng</td>
                            <td><input type="radio" value="3" name="pttt" >Thanh toán online</td>
                        </tr>
                    </table>
                        
                </div>
            </div>

            <div class="row margin-b">
            
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table>
                        
                        
                        <?php
                            view_cart(0);
                        ?>
                    </table>
                </div>
            </div>


            <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang"> 
            </div>

        </form>   

    </div>
        <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>