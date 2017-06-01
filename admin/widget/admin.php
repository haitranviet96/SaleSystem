<?PHP
session_start();
session_destroy();

session_start();
$hit_login = input_post('hit_login');
$name = input_post('username');
$pass = input_post('password');
$wrong_password = 0;
if($hit_login){
    $sql = 'SELECT * FROM `admin` WHERE name = \''.$name.'\'';
    $admin_var = db_select_row($sql);
    if($admin_var){
    if ($admin_var['password'] == $pass) {
        $_SESSION['account'] = $name;
        $_SESSION['password'] = $pass;
        $_SESSION['permission'] = $admin_var['permission'];
        $_SESSION['id'] = $admin_var['id'];
        echo '<script language="javascript">';
            echo'window.location = "index.php?action=orders"';
        echo '</script>';
    }
    else{
        $wrong_password = 1;
    }
    }
    else{
        $wrong_password = 1;
    }
    }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Administration</title>
        <base href="http://localhost/opencart/upload/admin/" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>
        <link href="view/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <script src="view/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
        <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
        <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
        <script src="view/javascript/common.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container">
            <header id="header" class="navbar navbar-static-top">
                <div class="navbar-header">
                    <a href="http://localhost/sales/admin/index.php"class="navbar-brand"><img src="http://localhost/sales/public/admin/image/logo1.png" alt="BK+ Store" title="BK+ Store" /></a></div>
            </header>
            <div id="content">
                <div class="container-fluid"><br />
                    <br />
                    <div class="row">
                        <div class="col-sm-offset-4 col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title"><i class="fa fa-lock"></i> Please enter your login details.</h1>
                                </div>
                                <div class="panel-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="input-username">Username</label>
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" name="username" value="" placeholder="Username" id="input-username" class="form-control" />
                                                <input type="hidden" name="hit_login" value="hit_login" id="hit_login" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input-password">Password</label>
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                                            </div>
                                            <?PHP
                                            if($wrong_password == 1){
                                            echo '<span class="help-block">You may enter wrong username or password</a></span>';
                                            }
                                            ?>
                                        </div>


                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> Login</button>
                                        </div>
                                        <input type="hidden" name="redirect" value="http://localhost/opencart/upload/admin/index.php?route=common/logout" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<footer id="footer"><a href="http://www.opencart.com">OpenCart</a> &copy; 2009-2017 All Rights Reserved.<br /></footer></div>-->
    </body></html>
