<?php

function transaction_get_list() {
    $sql = 'SELECT * FROM `transaction`';
    return db_select_list($sql);
}

function transaction_add($data = array()) {
    return db_insert('transaction', $data);
}

function transaction_delete($id) {
    return db_delete_by_id('transaction', 'id', $id);
}

function transaction_get_row($id) {
    $sql = 'SELECT * FROM `transaction` WHERE id = ' . $id . '';
    return db_select_row($sql);
}

function transaction_edit_by_id($idvalue, $data = array()) {
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
    foreach ($transaction as $key => $var) {
        $field .= $key . ',';
        $value .= "'" . mysqli_escape_string($conn, $var) . "'" . ",";
    }
    $sql = 'INSERT INTO `transaction` (' . trim($field, ',') . ') VALUES(' . trim($value, ',') . ')';
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Cau truy van bi sai');
    }
    echo mysqli_insert_id($conn);
    db_disconnect();
    ob_end_flush();
}

if (isset($_GET['fseller_id'])) {
    ob_start();
    require_once '../../system/database.php';
    global $conn;
    db_connect();
    $seller_id = mysqli_real_escape_string($conn, $_GET['fseller_id']);
    $query = 'SELECT t.*,a.name as seller_name,c.name as customer_name FROM `transaction` t JOIN `admin` a ON t.seller_id = a.id JOIN `customer` c ON t.user_id = c.id WHERE a.id=' . $seller_id . '';
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $json = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($json, $row);
        }
        $json = json_encode($json);
        header('Content-Type: application/json');
        echo $json;
    }
    db_disconnect();
    ob_end_flush();
}