<?php

require 'db/category.php';
$value = input_post('cate_id');


if (cate_delete($value)) {
    echo '<script language="javascript">';
        echo'alert("Delete Thành Công");';
        echo'window.location = "index.php?action=cate_list"';
    echo '</script>';
} else {
    echo '<script language="javascript">';
        echo'alert("Delete Thất Bại");';
        echo'window.location = "index.php?action=cate_list"';
    echo '</script>';
}

