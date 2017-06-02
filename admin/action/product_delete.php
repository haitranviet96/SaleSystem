<?php
check_login_super();
require 'db/product.php';
$value = input_post('product_id');
$catalog_id= input_post('catalog_id');


if (product_delete($value)) {
    echo '<script language="javascript">';
        echo'alert("Delete Thành Công");';
        echo'window.location = "index.php?action=product"';
    echo '</script>';
} else {
    echo '<script language="javascript">';
        echo'alert("Delete Thất Bại");';
        echo'window.location = "index.php?action=product"';
    echo '</script>';
}

