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
//function cate_edit($data array()){
//    return db_u
//}
