<nav id="column-left">
    <div id="profile">
        <div>
            <i class="fa fa-opencart"></i>
        </div>
        <div>
            <h4>Hello <?PHP echo $_SESSION['account']; ?></h4>
            <small><?PHP
                if ($_SESSION['permission'] == 0)
                    echo 'Seller';
                if ($_SESSION['permission'] == 1)
                    echo 'Admin';
                ?></small></div>
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
                    <a href="admin/index.php?action=product">All Products</a>
                </li>
            </ul>
        </li>

        <li id="menu-customer">
            <a href="admin/index.php?action=customer_list"><i class="fa fa-user fw"></i> <span>Customers</span></a>

        </li>
        <li id="menu-system">
            <a class="parent"><i class="fa fa-cog fw"></i> <span>System</span></a>
            <ul>
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
            </ul>
        </li>
    </ul>

</nav>
