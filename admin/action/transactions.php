<?php
check_login();
load_header();
load_sidebar();
if($_SESSION['permission'] == 1) load_widget('content-transactions_admin');
else    load_widget('content-transactions_seller');
load_footer();


