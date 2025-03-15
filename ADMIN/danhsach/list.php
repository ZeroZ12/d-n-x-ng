<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                
                    <div class="row mb10 frmds">
                        <table>
                            <tr>
                                <th></td>
                                <th>MÃ LOẠI</td>
                                <th>TÊN LOẠI</td>
                                <th></td>
                                <th></td>
                            </tr>
                            <?php foreach ($listdanhsach as $danhsach) { 
                                extract($danhsach);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td><a href="'.$suadm.'"><input type="button" value="SỬA"></a>
                                        <a href="'.$xoadm.'"><input type="button" value="XÓA"></a> </td>
                                    </tr>';
                                } ?>
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="CHỌN TẤT CẢ">
                        <input type="button" value="BỎ CHỌN TẤT CẢ">
                        <input type="button" value="XÓA CHỌN TẤT CẢ">
                        <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM"></a>
                    </div>
                </form>
            </div>
    </div>