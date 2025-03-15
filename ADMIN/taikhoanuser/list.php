<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row frmcontent">
                
                    <div class="row mb10 frmds">
                        <table>
                            <tr>
                                <th></td>
                                <th>MÃ TK</td>
                                <th>USER</td>
                                <th>MẬT KHẨU</td>
                                <th>EMAIL</td>
                                <th>ĐỊA CHỈ</td>
                                <th>ĐIỆN THOẠI</td>
                                <th>VAI TRÒ</td>                                <th></td>
                                <th></td>
                            </tr>
                            <?php foreach ($listuser as $taikhoan) { 
                                extract($taikhoan);
                                $suatk="index.php?act=suatk&id=".$id;
                                $xoatk="index.php?act=xoatk&id=".$id;
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$tel.'</td>
                                        <td>'.$role.'</td>
                                        <td><a href="'.$suatk.'"><input type="button" value="SỬA"></a>
                                        <a href="'.$xoatk.'"><input type="button" value="XÓA"></a> </td>
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