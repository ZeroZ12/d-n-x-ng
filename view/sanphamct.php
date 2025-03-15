<div class="row mb ">
            <div class="mucsanpham mr ">
                <div class="row mb">
                    <?php
                        extract($onesp);
                    ?>
                    <div class="title"><?=$name?></div>
                        <div class="row content">
                                <?php                                   
                                    $img=$img_path.$img;
                                    echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                                    echo $mota;
                                ?>
                        </div>
                    </div>
            <div class="row">
                    <div class="title">BÌNH LUẬN</div>
                        <div class="row content">
                                    
                        </div>
                    </div>
            <div class="row">
                    <div class="title">SẢN PHẨM CÙNG LOẠI</div>
                        <div class="row content">
                            <?php
                                foreach($sp_cungloai as $sp_cungloai) {
                                    extract($sp_cungloai);
                                    $linksp='index.php?act=sanphamct&idsp='.$id;
                                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                                }
                            ?>
                        </div>
                    </div>
            </div>
            <div class="thanhmuc">
                <?php 
                    include "thanhmuc.php";
                ?>
            </div>
        </div>