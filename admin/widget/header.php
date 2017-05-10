
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Categories</title>
        <base href="http://localhost/sales/" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <script type="text/javascript" src="public/admin/javascript/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="public/admin/javascript/bootstrap/js/bootstrap.min.js"></script>
        <link href="public/admin/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="public/admin/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <script src="public/admin/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
        <script src="public/admin/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <link href="public/admin/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
        <link type="text/css" href="public/admin/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
        <script src="public/admin/javascript/common.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container">
            <header id="header" class="navbar navbar-static-top">
                <div class="navbar-header">
                    <a type="button" id="button-menu" class="pull-left"><i class="fa fa-indent fa-lg"></i></a>
                    <a href="http://localhost/sales/admin?action=cate_list" class="navbar-brand"><img src="public/admin/image/logo.png" alt="OpenCart" title="OpenCart" /></a></div>
                <ul class="nav pull-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger pull-left">1</span> <i class="fa fa-bell fa-lg"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right alerts-dropdown">
                            <li class="dropdown-header">Orders</li>
                            <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;filter_order_status=5,1,2,12,3" style="display: block; overflow: auto;"><span class="label label-warning pull-right">0</span>Processing</a></li>
                            <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;filter_order_status=5,3"><span class="label label-success pull-right">0</span>Completed</a></li>
                            <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/return&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V"><span class="label label-danger pull-right">0</span>Returns</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Customers</li>
                            <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_online&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V"><span class="label label-success pull-right">0</span>Customers Online</a></li>
                            <li><a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;filter_approved=0"><span class="label label-danger pull-right">0</span>Pending approval</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Products</li>
                            <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;filter_quantity=0"><span class="label label-danger pull-right">1</span>Out of stock</a></li>
                            <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/review&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;filter_status=0"><span class="label label-danger pull-right">0</span>Reviews</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Affiliates</li>
                            <li><a href="http://localhost/opencart/upload/admin/index.php?route=marketing/affiliate&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;filter_approved=1"><span class="label label-danger pull-right">0</span>Pending approval</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home fa-lg"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">Stores</li>
                            <li><a href="http://localhost/opencart/upload/" target="_blank">Your Store</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-life-ring fa-lg"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">Help</li>
                            <li><a href="http://www.opencart.com" target="_blank">OpenCart Homepage</a></li>
                            <li><a href="http://docs.opencart.com" target="_blank">Documentation</a></li>
                            <li><a href="http://forum.opencart.com" target="_blank">Support Forum</a></li>
                        </ul>
                    </li>
                    <li><a href="admin/index.php?action=logout"><span class="hidden-xs hidden-sm hidden-md">Logout</span> <i class="fa fa-sign-out fa-lg"></i></a></li>
                </ul>
            </header>