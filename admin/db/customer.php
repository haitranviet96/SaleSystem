<?php

function customer_get_list() {
    $sql = 'SELECT * FROM `customer`';
    return db_select_list($sql);
}

function customer_add($data = array()) {
    return db_insert('customer', $data);
}

function customer_delete($id) {
    return db_delete_by_id('customer', 'id', $id);
}

function customer_get_row($id) {
    $sql = 'SELECT * FROM `customer` WHERE id = ' . $id . '';
    return db_select_row($sql);
}

function customer_edit_by_id($idvalue, $data = array()) {
    return db_update_by_id('customer', 'id', $idvalue, $data);
}

if (isset($_GET['fcustomer'])) {

    ob_start();
    require_once '../../system/database.php';
    global $conn;
    db_connect();
    $fcustomer = mysqli_real_escape_string($conn, $_GET['fcustomer']);
    $query = 'SELECT * FROM customer WHERE name like "%' . $fcustomer . '%"';
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
} else if (isset($_GET['customer'])) {
    ob_start();
    require_once '../../system/database.php';
    global $conn;
    db_connect();
    $action = $_GET['customer'];
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $phone = mysqli_real_escape_string($conn, $_GET['phone']);
    $address = mysqli_real_escape_string($conn, $_GET['address']);
    $type = mysqli_real_escape_string($conn, $_GET['type']);
    if ($action == 'ecustomer') {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $query = 'UPDATE `customer` SET `name` = "' . $name . '", `email` = "' . $email . '", `phone` = "' . $phone . '", `address` = "' . $address . '", `type` = "' . $type . '" WHERE `customer`.`id` = ' . $id . '';
    } else if ($action == 'ncustomer') {
        $query = 'INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `address`, `type`) VALUES (NULL, "' . $name . '", "' . $email . '", "' . $phone . '", "' . $address . '", "' . $type . '")';
    }
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Cau truy van bi sai');
    }
    echo mysqli_insert_id($conn);
//    $count = mysqli_num_rows($result);
//
//    if ($count > 0) {
//        $json = [];
//        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//            array_push($json, $row);
//        }
//        $json = json_encode($json);
//        header('Content-Type: application/json');
//        echo $json;
//    }
    db_disconnect();
    ob_end_flush();
//    $aResult = array();
//
//    if (!isset($_POST['functionname'])) {
//        $aResult['error'] = 'No function name!';
//    }
//
//    if (!isset($_POST['arguments'])) {
//        $aResult['error'] = 'No function arguments!';
//    }
//
//    if (!isset($aResult['error'])) {
//
//        switch ($_POST['functionname']) {
//            case 'customer_edit_by_id':
//                if (!is_array($_POST['arguments']) || (count($_POST['arguments']) < 2)) {
//                    $aResult['error'] = 'Error in arguments!';
//                } else {
//                    $aResult['result'] = customer_edit_by_id(floatval($_POST['arguments'][0]), floatval($_POST['arguments'][1]));
//                }
//                break;
//
//            default:
//                $aResult['error'] = 'Not found function ' . $_POST['functionname'] . '!';
//                break;
//        }
//    }
//
//    echo json_encode($aResult);
}