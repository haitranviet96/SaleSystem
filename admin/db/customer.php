<?php

function customer_get_list(){
 $sql = 'SELECT * FROM `customer`';
 return db_select_list($sql);
}

function customer_add($data = array()){
    return db_insert('customer', $data);
}
function customer_delete($id){
    return db_delete_by_id('customer', 'id', $id);
}
function customer_get_row($id){
    $sql = 'SELECT * FROM `customer` WHERE id = '.$id.'';
    return db_select_row($sql);
}
function customer_edit_by_id($idvalue,$data = array()){
    return db_update_by_id('customer', 'id', $idvalue, $data);
}