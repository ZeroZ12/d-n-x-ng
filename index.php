<?php
    session_start();
    include "model/pdo.php";
    include "model/danhsach.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "view/header.php";
    include "global.php";

    $spnew=loadall_sanpham_home();
    $dsdm=loadall_danhsach();
    $dstop10=loadall_sanpham_TOP10();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham' :
                if(isset($_POST['tk'])&&($_POST['tk']!="")){
                    $tk=$_POST['tk'];
                }else{
                    $tk="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                    
                }else{
                    $iddm=0;
                    // include "view/home.php";                
                } 
                $dssp=loadall_sanpham($tk,$iddm);
                $tendm=load_ten_dm($iddm);                    
                include "view/sanpham.php";
                break;
            case 'sanphamct' :
                if(isset($_GET['idsp'])&&($_GET['act']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai=load_sanpham_cungloai($id,$iddm);                    
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }                
                break;
            case 'dangky' :
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Đã đăng ký thành công!";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap' :
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=check_taikhoan($user, $pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        // echo "Đăng nhập thành công";
                        header('Location: index.php');
                    } else {
                        $thongbao = "Tài khoản không tồn tại";
                    }
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'edit-tk' :
                if(isset($_POST['capnhap']) && ($_POST['capnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];

                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION=check_taikhoan($user,$pass);
                    header('Location: index.php?act=edit-tk');               
                }
                include "view/taikhoan/edit-tk.php";
                break;
            case 'quenmk' :
                if(isset($_POST['guiemail']) && ($_POST['guiemail'])){                  
                    $email=$_POST['email'];
                    $checkemail=check_email($email);
                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao="Email này không tồn tại";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat' :
                session_unset();
                header('Location: index.php');               
                break;
            case 'gioithieu' :
                include "view/gioithieu.php";
                break;
            case 'lienhe' :
                include "view/lienhe.php";
                break;
            // case 'hoidap' :
            //     include "view/hoidap.php";
            //     break;
            // case 'gopy' :
            //     include "view/gopy.php";
            //     break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>