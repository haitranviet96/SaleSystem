<?php

function transaction_get_list(){
 $sql = 'SELECT * FROM `transaction`';
 return db_select_list($sql);
}

function transaction_add($data = array()){
    return db_insert('transaction', $data);
}

function transaction_delete($id){
    return db_delete_by_id('transaction', 'id', $id);
}
function transaction_get_row($id){
    $sql = 'SELECT * FROM `transaction` WHERE id = '.$id.'';
    return db_select_row($sql);
}
function transaction_edit_by_id($idvalue,$data = array()){
    return db_update_by_id('transaction', 'id', $idvalue, $data);
}