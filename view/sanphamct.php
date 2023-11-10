<div class="row margin-b">
    <div class="boxtrai margin-r">
        <div class="row margin-b">
            <?php
                extract($onesp);

            ?>
            <div class="boxtitle" style="font-weight: 700;"><?=$name?></div>
            <div class="row boxcontent ">
                <?php
                    
                    $hinh = $img_path.$img;
                    echo '<div class="row margin-b spct" ><img src="'.$hinh.'"></div>';
                    echo '<center><div class="row btnaddtocart" style="padding-right: 25px;">
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>
                        </div></center>';
                    echo "------------------------------------------- <br>";
                    echo "Mô tả:";
                    echo '<div style="font-size: 15px; padding-left: 50px;">'.$mota.'</div>';
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
        </script>
        <div class="row" id="binhluan">
            
        </div>
        <div class="row margin-b">
            <div class="boxtitle" style="font-weight: 700;">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent spcl">
                <?php
                    foreach($spcungloai as $spcungloai){
                        extract($spcungloai);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
                <?php include "boxright.php" ?>
    </div>
</div>