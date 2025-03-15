<?php
    include "../model/pdo.php";
    include "../model/danhsach.php";
    include "../model/taikhoan.php";
    include "../model/sanpham.php";
    include "header.php";
    //controller
    if(isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':

                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhsach($tenloai);
                    $thongbao="Thêm mới thành công";
                }

                include "danhsach/add.php";
                break;
            case 'lisdm':
                $listdanhsach=loadall_danhsach();
                include "danhsach/list.php";
                break;

            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhsach($_GET['id']);
                }
                $listdanhsach=loadall_danhsach();
                include "danhsach/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhsach($_GET['id']);
                }
                include "danhsach/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['id']>0)){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhsach($id,$tenloai);
                    // var_dump($_POST);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhsach=loadall_danhsach();
                include "danhsach/list.php";
                break;
                // controller sản phẩm 

                case 'addsp':

                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                        $thongbao="Thêm mới thành công";
                    }
                    $listdanhsach=loadall_danhsach();
                    include "sanpham/add.php";
                    break;
                case 'lissp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm=0;
                    }
                    $listdanhsach=loadall_danhsach();
                    $listsanpham=loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
    
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham("",0);
                    include "sanpham/list.php";
                    break;
    
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_sanpham($_GET['id']);
                    }
                    $listdanhsach=loadall_danhsach();
                    include "sanpham/update.php";
                    break;
    
                case 'updatesp':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                        // var_dump($_POST);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhsach=loadall_danhsach();
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
                case 'dskh':
                    $listuser=loadall_taikhoan();
                    include "taikhoanuser/list.php";
                    break;
    
                default:
                    include "home.php";
                    break;
        }
    } else {
        include "home.php";

    }



    include "footer.php";
?>