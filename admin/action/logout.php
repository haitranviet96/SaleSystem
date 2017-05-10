<?php
session_destroy();
echo '<script language="javascript">';
            echo'window.location = "index.php?action=admin"';
echo '</script>';