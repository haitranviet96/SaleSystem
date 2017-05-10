<?php

function product_get_list() {
    $sql = 'SELECT * FROM `product`';
    return db_select_list($sql);
}

function product_get_list_id($id) {
    $sql = 'SELECT * FROM `product` where catalog_id = ' . $id . '';
    return db_select_list($sql);
}

function product_add($data = array()) {
    return db_insert('product', $data);
}

function product_delete($id) {
    return db_delete_by_id('product', 'id', $id);
}

function search($fproduct) {
    if ($fproduct != "") {
        $product = mysqli_real_escape_string($conn, $fproduct);
        $query = 'SELECT * FROM product WHERE name like "%'.$product.'%"';
//        mysqli_select_db($conn, "user");
//        $result = mysqli_query($conn, $query);
//        $count = mysqli_num_rows($result);
        $result = db_select_list($query);
        if ($count > 0) {
            $json = [];
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($json, $row);
            }
            $json = json_encode($json);
            header('Content-Type: application/json');
            echo $json;
        }
    }
}

////function cate_edit($data array()){
////    return db_u
////}
