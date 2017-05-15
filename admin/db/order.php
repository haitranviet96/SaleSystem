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

if (isset($_GET['aorder'])) {

    ob_start();
    require_once '../../system/database.php';
    global $conn;
    db_connect();
    $order = json_decode($_GET['aoder']);
    
    $field = "";
    $value = "";
        foreach($order as $key => $var){
        $field .= $key.',';
        $value .= "'". mysqli_escape_string($conn, $var)."'".",";
    }
    $sql = 'INSERT INTO `order` ('.trim($field,',').') VALUES('. trim($value, ',').')';
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Cau truy van bi sai');
    }
    echo mysqli_insert_id($conn);
    db_disconnect();
    ob_end_flush();
}