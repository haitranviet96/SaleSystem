<?php

require 'db/product.php';
$value = input_post('product_id');
$catalog_id= input_post('catalog_id');


if (product_delete($value)) {
    echo '<script language="javascript">';
        echo'alert("Delete Thành Công");';
        echo'window.location = "index.php?action=product_list_cate_id&cate_id='.$catalog_id.'"';
    echo '</script>';
} else {
    echo '<script language="javascript">';
        echo'alert("Delete Thất Bại");';
        echo'window.location = "index.php?action=cate_list"';
    echo '</script>';
}

