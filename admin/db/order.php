<?php

function order_get_list(){
 $sql = 'SELECT * FROM `order`';
 return db_select_list($sql);
}

function order_add($data = array()){
    return db_insert('order', $data);
}

function order_delete($id){
    return db_delete_by_id('order', 'id', $id);
}
function order_get_row($id){
    $sql = 'SELECT * FROM `order` WHERE id = '.$id.'';
    return db_select_row($sql);
}
function order_edit_by_id($idvalue,$data = array()){
    return db_update_by_id('order', 'id', $idvalue, $data);
}
function order_get_row_by_transaction_id($id){
    $sql = 'SELECT * FROM `order` WHERE transaction_id = '.$id.'';
    return db_select_list($sql);
}