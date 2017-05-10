<?php

function admin_get_list(){
 $sql = 'SELECT * FROM `admin`';
 return db_select_list($sql);
}

function admin_add($data = array()){
    return db_insert('admin', $data);
}
function admin_delete($id){
    return db_delete_by_id('admin', 'id', $id);
}
function admin_get_row($name){
    $sql = 'SELECT * FROM `admin` WHERE name = '.$name.'';
    return db_select_row($sql);
}
//}
function admin_edit_by_id($idvalue,$data = array()){
    return db_update_by_id('admin', 'id', $idvalue, $data);
}