<?php

function product_get_list(){
 $sql = 'SELECT * FROM `product`';
 return db_select_list($sql);
}

function product_get_list_id($id){
 $sql = 'SELECT * FROM `product` where catalog_id = '.$id.'';
 return db_select_list($sql);
}

function product_add($data = array()){
    return db_insert('product', $data);
}

function product_delete($id){
    return db_delete_by_id('product', 'id', $id);
}
////function cate_edit($data array()){
////    return db_u
////}
