<?PHP
define('SYSPATH', 'system/');
require SYSPATH."site.php";
require SYSPATH."client.php";

$action = input_get('action');

if(file_exists('site/action/'.$action.'.php'))
{
    require SYSPATH."database.php";
    db_connect();
    require 'site/action/'.$action.'.php';
    db_disconnect();
}
 else {
    require 'site/action/show_404.php';
}
    
