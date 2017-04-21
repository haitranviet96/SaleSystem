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