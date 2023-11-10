<div class="row margin-b">
    <div class="boxtrai margin-r">
        <div class="row margin-b">
            
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                    <?php
                        view_cart(1);
                    ?>

                </table>
            </div>
        </div>
        <div class="margin-b10 bill">
        <a href="index.php?act=bill"> <input type="submit" value="TIẾP TỤC ĐẶT HÀNG">
        <a href="index.php"> <input type="button" value="CHỜ ĐÃ! TÔI MUỐN MUA THÊM!!!">
        <a href="index.php?act=delcart"> <input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>

        
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>