<?php
ob_start();
require_once ("connectdb.php");
    if (isset($_GET['fproduct'])){
        $fplace = mysqli_real_escape_string($conn, $_GET['fproduct']);
        $product = $_GET['fproduct'];
        $query = 'SELECT * FROM product WHERE name like "%'.$product.'%"';
//        mysqli_select_db($conn, "user");
//        $result = mysqli_query($conn, $query);
//        $count = mysqli_num_rows($result);
        $result = mysqli_query($conn,$query);
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
    }
mysqli_close($conn);
ob_end_flush();

////function cate_edit($data array()){
////    return db_u
////}
?>