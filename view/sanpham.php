<div class="row mb ">
            <div class="mucsanpham mr ">
                <div class="row mb">
                    
                    <div class="title"><strong> SẢN PHẨM <?=$tendm?></strong></div>
                        <div class="row content">
                                <?php                                   
                                    $i=0;
                                    foreach ($dssp as $sp) {
                                        extract($sp);
                                        $linksp="index.php?act=sanphamct&idsp=".$id;
                                        $hinh=$img_path.$img;
                                        if(($i==2)||($i==5)||($i==8)||($i==11)){
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
                        </div>
                    </div>
            
            </div>
            <div class="thanhmuc">
                <?php 
                    include "thanhmuc.php";
                ?>
            </div>
        </div>