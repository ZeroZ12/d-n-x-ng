<?php 
function insert_taikhoan($email,$user,$pass){
    $sql="insert into user(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from user order by id desc";
    $listuser=pdo_query($sql);
    return $listuser;
}
function check_taikhoan($user,$pass){ 
    $sql="select * from user where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function check_email($email){ 
    $sql="select * from user where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql="update sanpham set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' where id=".$id;
    pdo_execute($sql);  
}
?>