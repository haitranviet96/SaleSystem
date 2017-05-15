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

if (isset($_GET['tadd'])) {

    ob_start();
    require_once '../../system/database.php';
    global $conn;
    db_connect();
    $transaction = json_decode($_GET['tadd']);
    
    $field = "";
    $value = "";
        foreach($transaction as $key => $var){
        $field .= $key.',';
        $value .= "'". mysqli_escape_string($conn, $var)."'".",";
    }
    $sql = 'INSERT INTO `transaction` ('.trim($field,',').') VALUES('. trim($value, ',').')';
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Cau truy van bi sai');
    }
    echo mysqli_insert_id($conn);
    db_disconnect();
    ob_end_flush();
}