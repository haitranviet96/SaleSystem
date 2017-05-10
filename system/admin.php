<?php

function load_header(){
    require 'widget/header.php';
}
function load_footer(){
    require 'widget/footer.php';
}
function load_widget($widget){
    require 'widget/'.$widget.'.php';
}
function load_sidebar(){
    require 'widget/sidebar.php';
}
function load_admin(){
    require 'widget/admin.php';
}
function check_login(){
    session_start();
    if(!isset($_SESSION['permission'])) 
{
    die("YOU DO NOT OWN PERMISSION TO ACCESS THIS PAGE !");
}
 else {
     if($_SESSION['permission'] != 0 && $_SESSION['permission'] != 1){
        die("YOU DO NOT OWN PERMISSION TO ACCESS THIS PAGE !");     
     }
}
}
function check_login_super(){
    session_start();
    if(!isset($_SESSION['permission'])) 
{
    die("YOU DO NOT OWN PERMISSION TO ACCESS THIS PAGE !");
}
 else {
     if($_SESSION['permission'] != 1){
        die("YOU MUST BE ADMIN TO USE THIS FUNCTION !");     
     }
}
}
