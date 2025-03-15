<div class="row mb ">
                    <div class="title">TÀI KHOẢN</div>
                    <div class="content formtk">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>
                            <div class="row mb10">
                                Chào mừng quay trở lại<br>   
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                            </li>
                            <li>
                                <a href="index.php?act=edit-tk">Cập nhật tài khoản</a>
                            </li>
                            <?php if ($role == 1) { ?>
                            <li>
                                <a href="ADMIN/index.php">Đăng nhập ADMIN</a>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="index.php?act=thoat">EXIT</a>
                            </li>
                            </div>
                        <?php

                            }else{   
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                
                                <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>

                                <input type="password" name="pass" id="">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id=""> Ghi nhớ tài khoản ?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>              
                        </form>
                        <li>
                            <a href="">Quên mật khẩu?</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký tài khoản</a>
                        </li>
                        <?php }?>
                    </div>
                </div>
                <div class="row mb ">
                    <div class="title">DANHH MỤC</div>
                    <div class="content1 menudoc">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li>
                                            <a href="'.$linkdm.'">'.$name.'</a>
                                        </li>';
                                }
                            ?>
                            <!-- <li>
                                <a href="">Hot Sale</a>
                            </li>
                            <li>
                                <a href="">SamSung</a>
                            </li>
                            <li>
                                <a href="">Iphone</a>
                            </li>
                            <li>
                                <a href="">Oppo</a>
                            </li>
                            <li>
                                <a href="">Realme</a>
                            </li>
                            <li>
                                <a href="">Rog Phone</a>
                            </li>
                            <li>
                                <a href="">Phụ kiện</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searchm">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="tk">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="title">TOP YÊU THÍCH</div>
                    <div class="row content">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="row mb10 top7">
                                        <img src="'.$img.'" alt="">
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            }
                        ?>
                        <!-- <div class="row mb10 top7">
                            <img src="view/img/oppo/oppo-reno8-t-5g.png" alt="">
                            <a href="#">Oppo Reno8 5G</a>
                        </div>
                        <div class="row mb10 top7">
                            <img src="view/img/iphone/iphone-x-thum-3.jpg" alt="">
                            <a href="#">Iphone X</a>
                        </div>
                        <div class="row mb10 top7">
                            <img src="view/img/realme/gt-neo-5-ma-u-tra-ng.jpg" alt="">
                            <a href="#">Realme GT NEO 5</a>
                        </div>
                        <div class="row mb10 top7">
                            <img src="view/img/samsung/samsung-galaxy-a25.png" alt="">
                            <a href="#">Samsung Galaxy A25</a>
                        </div>
                        <div class="row mb10 top7">
                            <img src="view/img/oppo/oppo-reno10-5g.png" alt="">
                            <a href="#">Oppo Reno10 5G</a>
                        </div>
                        <div class="row mb10 top7">
                            <img src="view/img/Rog Phone/rogphone-5.jpg" alt="">
                            <a href="#">Rog Phone 5</a>
                        </div>
                        <div class="row mb10 top7">
                            <img src="view/img/samsung/samsung-galaxy-a55.jpg" alt="">
                            <a href="#">Samsung Galaxy A55</a>
                        </div> -->
                    </div>
                </div>