<div class="row margin-b">
    <div class="boxtrai margin-r">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="images/banner1.jpg" style="width:100%">
                           
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="images/banner2.jpg" style="width:100%">
                          
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="images/banner3.jpg" style="width:100%">
                            
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>


            </div>
        </div>
        <div class="row">
            <CEnter><h2>SẢN PHẨM MỚI NHẬP</h2></CEnter>
            <?php
                $i = 0; 
                foreach($spnew as $sp){
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=".$id;
                $hinh = $img_path.$img;
                if (($i==2) || ($i==5) || ($i==8) || ($i==11) || ($i==14)) {
                    $mr = "";
                }else{
                    $mr = "margin-r";
                }
                echo '<div class="boxsp '.$mr.'">
                        <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="sp"></a></div>
                        <p>$'.$price.'</p>
                        <a style="text-decoration: none;" href="'.$linksp.'">'.$name.'</a>
                        <div class="row btnaddtocart">
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>
                        </div>
                    </div>';
                $i+=1;
            } ?>
            
            <!-- <div class="boxsp margin-r">
                <div class="row img"><img src="images/1.jpg" alt="sp"></div>
                <p>$1200</p>
                <a href="">Laptop 1</a>
            </div>
            <div class="boxsp margin-r">
                <div class="row img"><img src="images/2.jpg" alt="sp2"></div>
                <p>$1500</p>
                <a href="">Laptop 2</a>
            </div>
            <div class="boxsp">
                <div class="row img"><img src="images/3.jpg" alt="sp3"></div>
                <p>$2000</p>
                <a href="">Laptop 3</a>
            </div>
            <div class="boxsp margin-r">
                <div class="row img"><img src="images/4.jpg" alt="sp4"></div>
                <p>$1200</p>
                <a href="">Laptop 4</a>
            </div>
            <div class="boxsp margin-r">
                <div class="row img"><img src="images/5.jpg" alt="sp5"></div>
                <p>$1500</p>
                <a href="">Laptop 5</a>
            </div>
            <div class="boxsp">
                <div class="row img"><img src="images/2.jpg" alt="sp6"></div>
                <p>$2000</p>
                <a href="">Laptop 6</a>
            </div>
            <div class="boxsp margin-r">
                <div class="row img"><img src="images/3.jpg" alt="sp7"></div>
                <p>$1200</p>
                <a href="">Laptop 7</a>
            </div>
            <div class="boxsp margin-r">
                <div class="row img"><img src="images/5.jpg" alt="sp8"></div>
                <p>$1500</p>
                <a href="">Laptop 8</a>
            </div>
            <div class="boxsp">
                <div class="row img"><img src="images/1.jpg" alt="sp9"></div>
                <p>$2000</p>
                <a href="">Laptop 9</a>
            </div> --> 
        </div>
    </div>
    
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>



</div>