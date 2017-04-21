
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Categories</title>
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
        <a type="button" id="button-menu" class="pull-left"><i class="fa fa-indent fa-lg"></i></a>
        <a href="http://localhost/opencart/upload/admin/index.php?route=common/dashboard&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF" class="navbar-brand"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></a></div>
    <ul class="nav pull-right">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger pull-left">1</span> <i class="fa fa-bell fa-lg"></i></a>
      <ul class="dropdown-menu dropdown-menu-right alerts-dropdown">
        <li class="dropdown-header">Orders</li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF&amp;filter_order_status=5,1,2,12,3" style="display: block; overflow: auto;"><span class="label label-warning pull-right">0</span>Processing</a></li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF&amp;filter_order_status=5,3"><span class="label label-success pull-right">0</span>Completed</a></li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/return&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF"><span class="label label-danger pull-right">0</span>Returns</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Customers</li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_online&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF"><span class="label label-success pull-right">0</span>Customers Online</a></li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF&amp;filter_approved=0"><span class="label label-danger pull-right">0</span>Pending approval</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Products</li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF&amp;filter_quantity=0"><span class="label label-danger pull-right">1</span>Out of stock</a></li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/review&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF&amp;filter_status=0"><span class="label label-danger pull-right">0</span>Reviews</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Affiliates</li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=marketing/affiliate&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF&amp;filter_approved=1"><span class="label label-danger pull-right">0</span>Pending approval</a></li>
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
    <li><a href="http://localhost/opencart/upload/admin/index.php?route=common/logout&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF"><span class="hidden-xs hidden-sm hidden-md">Logout</span> <i class="fa fa-sign-out fa-lg"></i></a></li>
  </ul>
  </header>
<nav id="column-left">
  <div id="profile">
    <div>
            <i class="fa fa-opencart"></i>
          </div>
    <div>
      <h4>John Doe</h4>
      <small>Administrator</small></div>
  </div>
  <ul id="menu">
        <li id="menu-dashboard">
            <a href="http://localhost/opencart/upload/admin/index.php?route=common/dashboard&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF"><i class="fa fa-dashboard fw"></i> <span>Dashboard</span></a>
                </li>
        <li id="menu-catalog">
            <a class="parent"><i class="fa fa-tags fw"></i> <span>Catalog</span></a>
                  <ul>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Categories</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Products</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/recurring&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Recurring Profiles</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/filter&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Filters</a>
                            </li>
                <li>
                    <a class="parent">Attributes</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/attribute&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Attributes</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/attribute_group&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Attribute Groups</a>
                                        </li>
                      </ul>
                  </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/option&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Options</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/manufacturer&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Manufacturers</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/download&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Downloads</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/review&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Reviews</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/information&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Information</a>
                            </li>
              </ul>
          </li>
        <li id="menu-extension">
            <a class="parent"><i class="fa fa-puzzle-piece fw"></i> <span>Extensions</span></a>
                  <ul>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=extension/installer&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Extension Installer</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=extension/extension&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Extensions</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=extension/modification&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Modifications</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=extension/event&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Events</a>
                            </li>
              </ul>
          </li>
        <li id="menu-design">
            <a class="parent"><i class="fa fa-television fw"></i> <span>Design</span></a>
                  <ul>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=design/layout&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Layouts</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=design/banner&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Banners</a>
                            </li>
              </ul>
          </li>
        <li id="menu-sale">
            <a class="parent"><i class="fa fa-shopping-cart fw"></i> <span>Sales</span></a>
                  <ul>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Orders</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=sale/recurring&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Recurring Profiles</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=sale/return&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Returns</a>
                            </li>
                <li>
                    <a class="parent">Gift Vouchers</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=sale/voucher&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Gift Vouchers</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=sale/voucher_theme&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Voucher Themes</a>
                                        </li>
                      </ul>
                  </li>
              </ul>
          </li>
        <li id="menu-customer">
            <a class="parent"><i class="fa fa-user fw"></i> <span>Customers</span></a>
                  <ul>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Customers</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer_group&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Customer Groups</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=customer/custom_field&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Custom Fields</a>
                            </li>
              </ul>
          </li>
        <li id="menu-marketing">
            <a class="parent"><i class="fa fa-share-alt fw"></i> <span>Marketing</span></a>
                  <ul>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=marketing/marketing&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Marketing</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=marketing/affiliate&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Affiliates</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=marketing/coupon&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Coupons</a>
                            </li>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=marketing/contact&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Mail</a>
                            </li>
              </ul>
          </li>
        <li id="menu-system">
            <a class="parent"><i class="fa fa-cog fw"></i> <span>System</span></a>
                  <ul>
                <li>
                    <a href="http://localhost/opencart/upload/admin/index.php?route=setting/store&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Settings</a>
                            </li>
                <li>
                    <a class="parent">Users</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=user/user&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Users</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=user/user_permission&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">User Groups</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=user/api&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">API</a>
                                        </li>
                      </ul>
                  </li>
                <li>
                    <a class="parent">Localisation</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/location&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Store Location</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/language&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Languages</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/currency&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Currencies</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/stock_status&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Stock Statuses</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/order_status&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Order Statuses</a>
                                        </li>
                        <li>
                            <a class="parent">Returns</a>
                                          <ul>
                                <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_status&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Return Statuses</a></li>
                                <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_action&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Return Actions</a></li>
                                <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_reason&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Return Reasons</a></li>
                              </ul>
                          </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/country&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Countries</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/zone&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Zones</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/geo_zone&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Geo Zones</a>
                                        </li>
                        <li>
                            <a class="parent">Taxes</a>
                                          <ul>
                                <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/tax_class&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Tax Classes</a></li>
                                <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/tax_rate&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Tax Rates</a></li>
                              </ul>
                          </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/length_class&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Length Classes</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/weight_class&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Weight Classes</a>
                                        </li>
                      </ul>
                  </li>
                <li>
                    <a class="parent">Tools</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=tool/upload&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Uploads</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=tool/backup&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Backup / Restore</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=tool/log&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Error Logs</a>
                                        </li>
                      </ul>
                  </li>
              </ul>
          </li>
        <li id="menu-report">
            <a class="parent"><i class="fa fa-bar-chart-o fw"></i> <span>Reports</span></a>
                  <ul>
                <li>
                    <a class="parent">Sales</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_order&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Orders</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_tax&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Tax</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_shipping&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Shipping</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_return&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Returns</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_coupon&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Coupons</a>
                                        </li>
                      </ul>
                  </li>
                <li>
                    <a class="parent">Products</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/product_viewed&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Viewed</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/product_purchased&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Purchased</a>
                                        </li>
                      </ul>
                  </li>
                <li>
                    <a class="parent">Customers</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_online&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Customers Online</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_activity&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Customer Activity</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_search&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Customer Searches</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_order&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Orders</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_reward&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Reward Points</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_credit&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Credit</a>
                                        </li>
                      </ul>
                  </li>
                <li>
                    <a class="parent">Marketing</a>
                              <ul>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/marketing&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Marketing</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/affiliate&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Affiliates</a>
                                        </li>
                        <li>
                            <a href="http://localhost/opencart/upload/admin/index.php?route=report/affiliate_activity&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Affiliate Activity</a>
                                        </li>
                      </ul>
                  </li>
              </ul>
          </li>
      </ul>
  <div id="stats">
    <ul>
      <li>
        <div>Orders Completed <span class="pull-right">0%</span></div>
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span></div>
        </div>
      </li>
      <li>
        <div>Orders Processing <span class="pull-right">0%</span></div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span></div>
        </div>
      </li>
      <li>
        <div>Other Statuses <span class="pull-right">0%</span></div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-category" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1>Categories</h1>
      <ul class="breadcrumb">
                <li><a href="http://localhost/opencart/upload/admin/index.php?route=common/dashboard&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Home</a></li>
                <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF">Categories</a></li>
              </ul>
    </div>
  </div>
  <div class="container-fluid">
        <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Category</h3>
      </div>
      <div class="panel-body">
        <form action="http://localhost/opencart/upload/admin/index.php?route=catalog/category/add&amp;token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
            <li><a href="#tab-data" data-toggle="tab">Data</a></li>
            <li><a href="#tab-design" data-toggle="tab">Design</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
              <ul class="nav nav-tabs" id="language">
                                <li><a href="#language1" data-toggle="tab"><img src="language/en-gb/en-gb.png" title="English" /> English</a></li>
                              </ul>
              <div class="tab-content">
                                <div class="tab-pane" id="language1">
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-name1">Category Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="category_description[1][name]" value="" placeholder="Category Name" id="input-name1" class="form-control" />
                                          </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-description1">Description</label>
                    <div class="col-sm-10">
                      <textarea name="category_description[1][description]" placeholder="Description" id="input-description1" class="form-control summernote"></textarea>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-meta-title1">Meta Tag Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="category_description[1][meta_title]" value="" placeholder="Meta Tag Title" id="input-meta-title1" class="form-control" />
                                          </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-meta-description1">Meta Tag Description</label>
                    <div class="col-sm-10">
                      <textarea name="category_description[1][meta_description]" rows="5" placeholder="Meta Tag Description" id="input-meta-description1" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-meta-keyword1">Meta Tag Keywords</label>
                    <div class="col-sm-10">
                      <textarea name="category_description[1][meta_keyword]" rows="5" placeholder="Meta Tag Keywords" id="input-meta-keyword1" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                              </div>
            </div>
            <div class="tab-pane" id="tab-data">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-parent">Parent</label>
                <div class="col-sm-10">
                  <input type="text" name="path" value="" placeholder="Parent" id="input-parent" class="form-control" />
                  <input type="hidden" name="parent_id" value="0" />
                                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="(Autocomplete)">Filters</span></label>
                <div class="col-sm-10">
                  <input type="text" name="filter" value="" placeholder="Filters" id="input-filter" class="form-control" />
                  <div id="category-filter" class="well well-sm" style="height: 150px; overflow: auto;">
                                      </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Stores</label>
                <div class="col-sm-10">
                  <div class="well well-sm" style="height: 150px; overflow: auto;">
                    <div class="checkbox">
                      <label>
                                                <input type="checkbox" name="category_store[]" value="0" checked="checked" />
                        Default                                              </label>
                    </div>
                                      </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-keyword"><span data-toggle="tooltip" title="Do not use spaces, instead replace spaces with - and make sure the SEO URL is globally unique.">SEO URL</span></label>
                <div class="col-sm-10">
                  <input type="text" name="keyword" value="" placeholder="SEO URL" id="input-keyword" class="form-control" />
                                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="http://localhost/opencart/upload/image/cache/no_image-100x100.png" alt="" title="" data-placeholder="http://localhost/opencart/upload/image/cache/no_image-100x100.png" /></a>
                  <input type="hidden" name="image" value="" id="input-image" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-top"><span data-toggle="tooltip" title="Display in the top menu bar. Only works for the top parent categories.">Top</span></label>
                <div class="col-sm-10">
                  <div class="checkbox">
                    <label>
                                            <input type="checkbox" name="top" value="1" id="input-top" />
                                            &nbsp; </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-column"><span data-toggle="tooltip" title="Number of columns to use for the bottom 3 categories. Only works for the top parent categories.">Columns</span></label>
                <div class="col-sm-10">
                  <input type="text" name="column" value="1" placeholder="Columns" id="input-column" class="form-control" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-sort-order">Sort Order</label>
                <div class="col-sm-10">
                  <input type="text" name="sort_order" value="0" placeholder="Sort Order" id="input-sort-order" class="form-control" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-status">Status</label>
                <div class="col-sm-10">
                  <select name="status" id="input-status" class="form-control">
                                        <option value="1" selected="selected">Enabled</option>
                    <option value="0">Disabled</option>
                                      </select>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-design">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left">Stores</td>
                      <td class="text-left">Layout Override</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-left">Default</td>
                      <td class="text-left"><select name="category_layout[0]" class="form-control">
                          <option value=""></option>
                                                                              <option value="6">Account</option>
                                                                                                        <option value="10">Affiliate</option>
                                                                                                        <option value="3">Category</option>
                                                                                                        <option value="7">Checkout</option>
                                                                                                        <option value="12">Compare</option>
                                                                                                        <option value="8">Contact</option>
                                                                                                        <option value="4">Default</option>
                                                                                                        <option value="1">Home</option>
                                                                                                        <option value="11">Information</option>
                                                                                                        <option value="5">Manufacturer</option>
                                                                                                        <option value="2">Product</option>
                                                                                                        <option value="13">Search</option>
                                                                                                        <option value="9">Sitemap</option>
                                                                            </select></td>
                    </tr>
                                      </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>
  <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />
  <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> 
  <script type="text/javascript"><!--
$('input[name=\'path\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=catalog/category/autocomplete&token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				json.unshift({
					category_id: 0,
					name: ' --- None --- '
				});

				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['category_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'path\']').val(item['label']);
		$('input[name=\'parent_id\']').val(item['value']);
	}
});
//--></script> 
  <script type="text/javascript"><!--
$('input[name=\'filter\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=catalog/filter/autocomplete&token=LnZ459H5hWWwiGWFMfHnoXI6ESYrNQtF&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['filter_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'filter\']').val('');

		$('#category-filter' + item['value']).remove();

		$('#category-filter').append('<div id="category-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category_filter[]" value="' + item['value'] + '" /></div>');
	}
});

$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
	$(this).parent().remove();
});
//--></script> 
  <script type="text/javascript"><!--
$('#language a:first').tab('show');
//--></script></div>
<footer id="footer"><a href="http://www.opencart.com">OpenCart</a> &copy; 2009-2017 All Rights Reserved.<br />Version 2.3.0.2</footer></div>
</body></html>
