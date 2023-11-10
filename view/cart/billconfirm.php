<div class="row margin-b">
    <div class="boxtrai margin-r">
            <div class="row margin-b">
            
                <div class="boxtitle">CẢM ƠN</div>
                <div class="row boxcontent" style="text-align:center; min-height: 100px;">
                    <h2>Cảm ơn quý khách đã đặt hàng!</h2>
                </div>
            </div>

            <?php
                if (isset($bill)&&(is_array($bill))) {
                    extract($bill);
                }
            ?>

            <div class="row margin-b">
            
                <div class="boxtitle">MÃ ĐƠN HÀNG</div>
                <div class="row boxcontent info" style="text-align:center; list-style-type: none; min-height: 120px;">
                    <li>- Mã đơn hàng: <?=$bill['id']?></li>
                    <li>- Ngày đặt hàng: <?=$bill['ngaydathang']?></li>
                    <li>- Tổng đơn hàng: <?=$bill['total']?></li>
                    <li>- Phương thức thanh toán: <?=$bill['bill_pttt']?></li> 
                </div>
            </div>

            <div class="row margin-b">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                    <div class="row boxcontent billform" style="text-align: center; min-height:150px">

                        <table>            
                            <tr>
                                <td>Người đặt hàng: </td>
                                <td><?=$bill['bill_name']?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ: </td>
                                <td><?=$bill['bill_address']?></td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                                <td><?=$bill['bill_email']?></td>
                            </tr>
                            <tr>
                                <td>Điện thoại: </td>
                                <td><?=$bill['bill_tel']?></td>
                            </tr>
                        </table>

                    </div>
            </div>


            <div class="row margin-b">
            
                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table>
                        <tr>
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>ĐƠN giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>

                        <?php 
                            chitiet_bill($billct);
                        ?>

                    </table>
                </div>
            </div>

    </div>
        <div class="boxphai">
            <?php include "view/boxright.php" ?>
        </div>
</div>