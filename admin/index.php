<?PHP
define('SYSPATH', '../system/');
require SYSPATH."admin.php";
require SYSPATH."client.php";
require "accountinfo.php";
$action = input_get('action');
if(!$action)
{
    require SYSPATH."database.php";
    db_connect();
    require 'action/admin.php';
    db_disconnect();
}
else{
if(file_exists('action/'.$action.'.php'))
{
    require SYSPATH."database.php";
    db_connect();
    require 'action/'.$action.'.php';
    db_disconnect();
}
 else {
    require 'action/show_404.php';
}
}
