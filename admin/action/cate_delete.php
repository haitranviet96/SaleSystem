<?php

require 'db/category.php';
$value = input_post('cate_id');


if (cate_delete($value)) {
    echo '<script language="javascript">';
        echo'alert("Delete Successful");';
        echo'window.location = "index.php?action=cate_list"';
    echo '</script>';
} else {
    echo '<script language="javascript">';
        echo'alert("Delete False");';
        echo'window.location = "index.php?action=cate_list"';
    echo '</script>';
}

