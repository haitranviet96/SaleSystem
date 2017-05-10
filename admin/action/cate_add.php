<?PHP
//$id = input_get('cate_id');
//$data = db_select_row('select * from menucha where id_cha = '.$id.'');
//echo $id;
//echo $data;
check_login_super();
load_header();
load_sidebar();

load_widget('content-cate_add');

load_footer();