<?php
check_login_super();
require 'db/admin.php';
$value = input_post('admin_id');


if (admin_delete($value)) {
    echo '<script language="javascript">';
        echo'alert("Delete Successful");';
        echo'window.location = "index.php?action=list_admins"';
    echo '</script>';
} else {
    echo '<script language="javascript">';
        echo'alert("Delete False");';
        echo'window.location = "index.php?action=list_admins"';
    echo '</script>';
}
