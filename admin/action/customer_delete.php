<?php
require 'db/customer.php';
$value = input_post('customer_id');


if (customer_delete($value)) {
    echo '<script language="javascript">';
        echo'alert("Delete Successful");';
        echo'window.location = "index.php?action=customer_list"';
    echo '</script>';
} else {
    echo '<script language="javascript">';
        echo'alert("Delete False");';
        echo'window.location = "index.php?action=customer_list"';
    echo '</script>';
}
