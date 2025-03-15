<?php
function insert_danhsach($tenloai){
    $sql="insert into danhsach(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhsach($id){
    $sql="delete from danhsach where id=".$id;
    pdo_execute($sql);
}
function loadall_danhsach(){
    $sql="select * from danhsach order by id desc";
    $listdanhsach=pdo_query($sql);
    return $listdanhsach;
}
function loadone_danhsach($id){
    $sql="select * from danhsach where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhsach($id,$tenloai){
    $sql="update danhsach set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>