<div class="row mb ">
            <div class="mucsanpham mr ">
                <div class="row">
                    <div class="banner">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                        <img src="view/img/ba-n-sao-trang-chu-2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">2 / 4</div>
                        <img src="view/img/mi-13.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">3 / 4</div>
                        <img src="view/img/web (1).jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="view/img/web.jpg" style="width:100%">
                        </div>
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        </div>
                        
                        <br>

                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span> 

                        </div>

                        <script>
                           
                        </script>
                    </div>
                </div>
                <div class="row ">
                    <?php
                        $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="sanpham '.$mr.'">
                                    <div class="img row">
                                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                    </div>
                                    <p>'.$price.' đ</p>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                </div>';
                            $i+=1;
                        }
                    ?>
                    <!-- <div class="sanpham mr">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div>
                    <div class="sanpham mr">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>                        
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div>
                    <div class="sanpham ">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>                        
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div>
                    <div class="sanpham mr">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>                        
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div>
                    <div class="sanpham mr">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>                        
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div>
                    <div class="sanpham ">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>                        
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div>
                    <div class="sanpham mr">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>                        
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div>
                    <div class="sanpham mr">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>                        
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div>
                    <div class="sanpham ">
                        <div class="img row">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                        </div>                        
                        <p>5.950.000 đ</p>
                        <a href="">Realme GT Neo 5</a>
                    </div> -->
                </div>
            </div>
            <div class="thanhmuc">
                <?php 
                    include "thanhmuc.php";
                ?>
            </div>
        </div>