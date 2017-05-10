
<nav id="column-left">
    <div id="profile">
        <div>
            <i class="fa fa-opencart"></i>
        </div>
        <div>
            <h4>Hello <?PHP echo $_SESSION['account']; ?></h4>
            <small><?PHP if ($_SESSION['permission'] == 0) echo 'Seller';
if ($_SESSION['permission'] == 1) echo 'Admin'; ?></small></div>
    </div>
    <ul id="menu">
        <li id="menu-sale">
            <a class="parent"><i class="fa fa-shopping-cart fw"></i> <span>Sales</span></a>
            <ul>
                <li>

                    <a href="admin/index.php?action=orders">Orders</a>
                            </li>
                            <li>
                    <a href="admin/index.php?action=transactions">Transactions</a>
                            </li>
              </ul>
          </li>
                    <li id="menu-catalog">
                        <a class="parent"><i class="fa fa-tags fw"></i> <span>Catalog</span></a>
                        <ul>
                            <li>
                                <a href="admin/index.php?action=cate_list">Categories</a>
                            </li>
                            
                            <li>
                                <a href="admin/index.php?action=product">Products</a>
                            </li>
                            
<!--                            <li>
                                <a href="admin/index.php?action=customer_list">Customers</a>
                            </li>-->
<!--                            <li>
                                <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/filter&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Filters</a>
                            </li>
                            <li>
                                <a class="parent">Attributes</a>
                                <ul>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/attribute&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Attributes</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/attribute_group&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Attribute Groups</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/option&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Options</a>
                            </li>
                            <li>
                                <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/manufacturer&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Manufacturers</a>
                            </li>
                            <li>
                                <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/download&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Downloads</a>
                            </li>
                            <li>
                                <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/review&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Reviews</a>
                            </li>
                            <li>
                                <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/information&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Information</a>
                            </li>-->
                        </ul>
                    </li>
                   
                   <li id="menu-customer">
            <a href="admin/index.php?action=customer_list"><i class="fa fa-user fw"></i> <span>Customers</span></a>
                  
          </li>

        <!--                            <li>
                                        <a href="admin/index.php?action=customer_list">Customers</a>
                                    </li>-->
        <!--                            <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/filter&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Filters</a>
                                    </li>
                                    <li>
                                        <a class="parent">Attributes</a>
                                        <ul>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/attribute&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Attributes</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/attribute_group&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Attribute Groups</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/option&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Options</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/manufacturer&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Manufacturers</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/download&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Downloads</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/review&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Reviews</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/information&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Information</a>
                                    </li>-->
    

<li id="menu-customer">
    <a href="admin/index.php?action=customer_list"><i class="fa fa-user fw"></i> <span>Customers</span></a>

</li>




<li id="menu-system">
    <a class="parent"><i class="fa fa-cog fw"></i> <span>System</span></a>
    <ul>
        <li>
            <a href="http://localhost/opencart/upload/admin/index.php?route=setting/store&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Settings</a>
        </li>
        <li>
            <a >Admins</a>
            <ul>
                <li>
                    <a href="admin/index.php?action=list_admins">List all Admins</a>
                </li>
                <li>
                    <a href="admin/index.php?action=seller_list">List all Sellers</a>
                </li>
            </ul>
        </li>

        <!--                            <li>
                                        <a class="parent">Localisation</a>
                                        <ul>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/location&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Store Location</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/language&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Languages</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/currency&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Currencies</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/stock_status&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Stock Statuses</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/order_status&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Order Statuses</a>
                                            </li>
                                            <li>
                                                <a class="parent">Returns</a>
                                                <ul>
                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_status&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Return Statuses</a></li>
                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_action&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Return Actions</a></li>
                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_reason&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Return Reasons</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/country&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Countries</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/zone&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Zones</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/geo_zone&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Geo Zones</a>
                                            </li>
                                            <li>
                                                <a class="parent">Taxes</a>
                                                <ul>
                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/tax_class&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Tax Classes</a></li>
                                                    <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/tax_rate&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Tax Rates</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/length_class&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Length Classes</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=localisation/weight_class&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Weight Classes</a>
                                            </li>
                                        </ul>
                                    </li>-->
        <!--                            <li>
                                        <a class="parent">Tools</a>
                                        <ul>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=tool/upload&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Uploads</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=tool/backup&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Backup / Restore</a>
                                            </li>
                                            <li>
                                                <a href="http://localhost/opencart/upload/admin/index.php?route=tool/log&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Error Logs</a>
                                            </li>
                                        </ul>
                                    </li>-->
    </ul>
</li>
<!--                    <li id="menu-report">
                        <a class="parent"><i class="fa fa-bar-chart-o fw"></i> <span>Reports</span></a>
                        <ul>
                            <li>
                                <a class="parent">Sales</a>
                                <ul>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_order&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Orders</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_tax&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Tax</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_shipping&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Shipping</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_return&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Returns</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_coupon&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Coupons</a>
                                    </li>
                                </ul>
                            </li>
                           
                            <li>
                                <a class="parent">Customers</a>
                                <ul>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_online&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Customers Online</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_activity&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Customer Activity</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_search&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Customer Searches</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_order&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Orders</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_reward&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Reward Points</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_credit&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Credit</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="parent">Marketing</a>
                                <ul>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/marketing&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Marketing</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/affiliate&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Affiliates</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/opencart/upload/admin/index.php?route=report/affiliate_activity&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V">Affiliate Activity</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
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
