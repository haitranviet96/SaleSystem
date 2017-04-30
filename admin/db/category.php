<?php

function cate_get_list(){
 $sql = 'SELECT * FROM `catalog`';
 return db_select_list($sql);
}

function cate_add($data = array()){
    return db_insert('catalog', $data);
}

function cate_delete($id){
    return db_delete_by_id('catalog', 'id', $id);
}
function cate_get_row($id){
    $sql = 'SELECT * FROM `catalog` WHERE id = '.$id.'';
    return db_select_row($sql);
}
function cate_edit_by_id($idvalue,$data = array()){
    return db_update_by_id('catalog', 'id', $idvalue, $data);
}