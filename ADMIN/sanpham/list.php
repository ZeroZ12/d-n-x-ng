<div class="row">
            <div class="row frmtitle mb">
                <h1>DANH SÁCH SẢN PHẨM</h1>
            </div>
            <form action="index.php?act=lissp" method="post">
                <input type="text" name="kyw">
                    <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhsach as $danhsach) {
                                extract($danhsach);
                                echo '<option value="' .$id. '">' .$name. '</option>';
                            }
                        ?>
                    </select>
                <input type="submit" name="listok" value="OK"> 
            </form>
            <div class="row frmcontent">
                
                    <div class="row mb10 frmds">
                        
                        <table>
                            <tr>
                                <th></td>
                                <th>MÃ LOẠI</td>
                                <th>TÊN SẢN PHẨM</td>
                                <th>HÌNH</td>
                                <th>GIÁ </td>
                                <th>LƯỢT XEM</td>
                                <th></td>
                            </tr>
                            <?php foreach ($listsanpham as $sanpham) { 
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$sanpham['id'];
                                $xoasp="index.php?act=xoasp&id=".$sanpham['id'];
                                $hinhpath="../upload/".$img;
                                if(is_file($hinhpath)){
                                    $hinh="<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $hinh="no photo";
                                }
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$sanpham['id'].'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$view.'</td>
                                        <td><a href="'.$suasp.'"><input type="button" value="SỬA"></a>
                                        <a href="'.$xoasp.'"><input type="button" value="XÓA"></a> </td>
                                    </tr>';
                                } ?>
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="CHỌN TẤT CẢ">
                        <input type="button" value="BỎ CHỌN TẤT CẢ">
                        <input type="button" value="XÓA CHỌN TẤT CẢ">
                        <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM"></a>
                    </div>
                </form>
            </div>
    </div>