<?php
load_db('order');
load_db('product');
//$product = product_get_list();

if (isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `product` WHERE CONCAT(`id`, `name`, `price`, `qty`) LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `product`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query) {
    $connect = mysqli_connect("localhost", "root", "", "banhang2");
    $filter_Result = mysqli_query($connect, $query);
    if (!$filter_Result) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }
    return $filter_Result;
}
?>
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <h1>Orders</h1>
            <ul class="breadcrumb">
                <li><a href="admin/index.php">Home</a></li>
                <li><a href="admin/index.php?action=orders">Orders</a></li>
            </ul>
        </div>
    </div>
    <div class="alert alert-danger" ><i class="fa fa-exclamation-circle"></i> Warning: Please check the form carefully for errors!      <button type="button" class="close" data-dismiss="alert">Ã—</button>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Order</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <ul id="order" class="nav nav-tabs nav-justified">
                        <li class="disabled active"><a href="#tab-cart" data-toggle="tab">1. Products</a></li>
                        <li class="disabled"><a href="#tab-customer" data-toggle="tab">2. Customer Details</a></li>
                        <li class="disabled"><a href="#tab-total" data-toggle="tab">3. Totals</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-cart">
                            <legend>Cart</legend>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td class="text-left">Image</td>
                                            <td class="text-left">Product</td>
                                            <td class="text-right">Quantity</td>
                                            <td class="text-right">Unit Price</td>
                                            <td class="text-right">Total</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody id="cart">

                                        <?php
//                        if (order_get_row_by_transaction_id($id) == null){
//                      echo '<td class="text-center" colspan="6">No results!</td>';
//                        } else {
//                            
//                        }
//                              
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <button type="button" id="button-cart" class="btn btn-primary"  onclick="$('a[href=\'#tab-customer\']').tab('show');"><i class="fa fa-arrow-right"></i> Continue</button>
                            </div>
                            <fieldset>
                                <legend>Add Product(s)</legend>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-product">Product Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="product" id="input_product" class="form-control" placeholder="Search for product.." onkeydown = "if (event.keyCode == 13) document.getElementById('button_search').click()"   />
                                      <!--<input type="hidden" name="product_id" value="" />-->
                                    </div>
                                    <div class="col-sm-2">
                                <button type="button" id="button_search" class="btn btn-primary">
                                    <i class="fa fa-filter"></i> Search </button>
                            </div>
                                </div>
                            </fieldset>
                            <br></br>
                            <script type="text/javascript">
                                (function () {
                                    document.getElementById("button_search").onclick = function () {
                                        search_Product(document.getElementById("input_product").value);
                                    };
                                })();
                            </script>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">                    <a class="asc">Product Name</a>
                                        </td>
                                        <td class="text-right">                    <a >Price</a>
                                        </td>
                                        <td class="text-right">                    <a >Quantity</a>
                                        </td>
                                        <td class="text-left">                    <a >Content</a>
                                        </td>
                                        <td class="text-right">Order</td>
                                    </tr>
                                </thead>
                                <tbody id="product-table">
                                    <?php
                                    $product_table = product_get_list();
                                    if ($product_table == null) {
                                        echo '<td class="text-center" colspan="6">No results!</td>';
                                    } else {
                                        foreach ($product_table as $item) {
                                            ?>
                                            <tr>
                                                              <!--<td class="text-center">                    <input type="checkbox" name="selected[]" value="33" />-->
                                                <!--</td>-->
                                                <td class="text-center"><img src="<?PHP echo $item['image_link']; ?>" alt="Demo of <?PHP echo $item['name']; ?>" width="40" height="40">
                                                </td>
                                                <td class="text-left"><?PHP echo $item['name']; ?></td>
                                                <td class="text-right"><?PHP echo $item['price']; ?></td>
                                                <td class="text-right"><?PHP echo $item['qty']; ?></td>
                                                <td class="text-left"> <div class="text-danger"><?PHP echo $item['content']; ?> </div>

                                                </td>
                                                <td class="text-right">
                                                    <!--                                        <form method="post" action="admin/index.php?action=product_delete" >
                                                                                                <input type="hidden" name="product_id" value="<?PHP echo $item['id']; ?>" />
                                                                                                <a href="admin/index.php?action=product_edit&product_id=<?PHP echo $item['id'] ?>" title="Edit" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                                                                                <a href="" onclick="$(this).parent().submit(); return false;" title="Delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                                                            </form>-->
                                                    <div class="input-group btn-block" style="max-width: 100px;">
                                                        <input type="number" min="0" max="<?PHP echo $item['qty']; ?>" id ="product_quantity[<?php echo $item['id']; ?>]" name="product[<?php echo $item['id']; ?>][quantity]" value="0" class="form-control">
                                                        <span class="input-group-btn"><button type="button" id="button-product-add" class="btn btn-primary" onclick="addToCart(<?PHP echo $item['id']; ?>)">
                                                                <i class="fa fa-plus-circle"></i>
                                                            </button>
                                                        </span>
                                                    </div>

                                                </td>


                                            </tr>
                                            <?php
                                        }
                                    }
//                              
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-customer">
                            <!--                            <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="input-store">Store</label>
                                                            <div class="col-sm-10">
                                                                <select name="store_id" id="input-store" class="form-control">
                                                                    <option value="0" selected="selected">Default</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="input-currency">Currency</label>
                                                            <div class="col-sm-10">
                                                                <select name="currency" id="input-currency" class="form-control">
                                                                    <option value="EUR">Euro</option>
                                                                    <option value="GBP">Pound Sterling</option>
                                                                    <option value="USD" selected="selected">US Dollar</option>
                                                                </select>
                                                            </div>
                                                        </div>-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-customer">Customer</label>
                                <div class="col-sm-10">
                                    <input type="text" name="customer" value="" placeholder="Customer" id="input-customer" class="form-control" />
                                    <input type="hidden" name="customer_id" value="" />
                                </div>
                            </div>
                            <!--                            <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="input-customer-group">Customer Group</label>
                                                            <div class="col-sm-10">
                                                                <select name="customer_group_id" id="input-customer-group" class="form-control">
                                                                    <option value="1" selected="selected">Default</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="firstname" value="" id="input-firstname" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="lastname" value="" id="input-lastname" class="form-control" />
                                                            </div>
                                                        </div>-->
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="" id="input-email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="telephone" value="" id="input-telephone" class="form-control" />
                                </div>
                            </div>                      
                            <!--                            <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="input-fax">Fax</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="fax" value="" id="input-fax" class="form-control" />
                                                            </div>
                                                        </div>-->
                            <div class="col-sm-6 text-left">
                                <button type="button" onclick="$('a[href=\'#tab-cart\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                            <div class="text-right">
                                <button type="button" id="button-customer" data-loading-text="Loading..." class="btn btn-primary" onclick="$('a[href=\'#tab-total\']').tab('show');"><i class="fa fa-arrow-right" ></i> Continue</button>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-total">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td class="text-left">Product</td>
                                            <td class="text-left">Model</td>
                                            <td class="text-right">Quantity</td>
                                            <td class="text-right">Unit Price</td>
                                            <td class="text-right">Total</td>
                                        </tr>
                                    </thead>
                                    <tbody id="total">
                                        <tr>
                                            <td class="text-center" colspan="5">No results!</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <fieldset>
                                <legend>Order Details</legend>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-shipping-method">Shipping Method</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <select name="shipping_method" id="input-shipping-method" class="form-control">
                                                <option value=""> --- Please Select --- </option>
                                            </select>
                                            <span class="input-group-btn">
                                                <button type="button" id="button-shipping-method" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                                            </span></div>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-payment-method">Payment Method</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <select name="payment_method" id="input-payment-method" class="form-control">
                                                <option value=""> --- Please Select --- </option>
                                            </select>
                                            <span class="input-group-btn">
                                                <button type="button" id="button-payment-method" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                                            </span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-coupon">Coupon</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input type="text" name="coupon" value="" id="input-coupon" class="form-control" />
                                            <span class="input-group-btn">
                                                <button type="button" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                                            </span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-voucher">Voucher</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input type="text" name="voucher" value="" id="input-voucher" data-loading-text="Loading..." class="form-control" />
                                            <span class="input-group-btn">
                                                <button type="button" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                                            </span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-reward">Reward</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input type="text" name="reward" value="" id="input-reward" data-loading-text="Loading..." class="form-control" />
                                            <span class="input-group-btn">
                                                <button type="button" id="button-reward" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                                            </span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-order-status">Order Status</label>
                                    <div class="col-sm-10">
                                        <select name="order_status_id" id="input-order-status" class="form-control">
                                            <option value="7">Canceled</option>
                                            <option value="9">Canceled Reversal</option>
                                            <option value="13">Chargeback</option>
                                            <option value="5">Complete</option>
                                            <option value="8">Denied</option>
                                            <option value="14">Expired</option>
                                            <option value="10">Failed</option>
                                            <option value="1" selected="selected">Pending</option>
                                            <option value="15">Processed</option>
                                            <option value="2">Processing</option>
                                            <option value="11">Refunded</option>
                                            <option value="12">Reversed</option>
                                            <option value="3">Shipped</option>
                                            <option value="16">Voided</option>
                                        </select>
                                        <input type="hidden" name="order_id" value="0" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-comment">Comment</label>
                                    <div class="col-sm-10">
                                        <textarea name="comment" rows="5" id="input-comment" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-affiliate">Affiliate</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="affiliate" value="" id="input-affiliate" class="form-control" />
                                        <input type="hidden" name="affiliate_id" value="" />
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="col-sm-6 text-left">
                                    <button type="button" onclick="$('a[href=\'#tab-customer\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button type="button" id="button-refresh" data-toggle="tooltip" title="Refresh" data-loading-text="Loading..." class="btn btn-warning"><i class="fa fa-refresh"></i></button>
                                    <button type="button" id="button-save" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function search_Product(str) {
            console.log(str);

                var product = "fproduct=" + str;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    console.log(this.readyState + ' ' + this.status);
                    if (this.readyState === 4 && this.status === 200) {
                        console.log('ready');
                        var myObj = JSON.parse(this.responseText);
                        $('#product-table').text('');
                        for (var i = 0; i < myObj.length; i++) {
                            console.log(i);
                            displayProduct(myObj[i]['id'], myObj[i]['image_link'], myObj[i]['name'], myObj[i]['price'], myObj[i]['qty'], myObj[i]['content']);
                        }
                    }
                };
                xmlhttp.open("GET", "admin/db/product.php?" + product, true);
                xmlhttp.send();
            
        }
        function displayProduct(id, image, productName, price, quantity, content) {
            console.log('id = ' + id);
            var text =
                    '<tr><td id="' + id + '" class="text-center"><img src="' + image +
                    '" alt="Demo of ' + productName + '" width="40" height="40"></td><td class="text-left">' +
                    productName + '</td><td class="text-right">' + price +
                    '</td><td class="text-right">' + quantity +
                    '</td><td class="text-left"><div class="text-danger">' + content + '</div></td>\n\
                    <td class="text-right">\n\
                    <div class="input-group btn-block" style="max-width: 100px;">\n\
                    <input type="number" min="0" max="' + quantity + '" id="product_quantity[' + id +
                    ']" name="product[][quantity]" value="0" class="form-control">\n\
                    <span class="input-group-btn">\n\
                    <button type="button" id="button-product-add" class="btn btn-primary" onclick="addToCart(' + id +
                    ')"><i class="fa fa-plus-circle"></i></button></span></div></td></tr>';
            $('#product-table').append(text);
        }
        function searchProduct() {
            // Declare variables 
            var input, filter, table, tr, td, i;
            input = document.getElementById("input-product");
            filter = input.value.toUpperCase();
            table = document.getElementById("product-table");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
        // FUNCTION ADD PRODUCT TO CART
        var cart = [];
        function addToCart(id) {

            var cart_table = document.getElementById("cart");

            var box = document.getElementById("product_quantity[" + id + "]");

            var quantity = parseInt(box.value);
//                                            cart_table.html(id + quantity);
            box.value = 0;
            if (quantity === 0)
                return;
            if (cart.length === 0) {
                addToCartTable(cart_table, quantity);
                cart.push({
                    id: id,
                    quantity: quantity
                });
                return;
            }
            for (var i = 0; i < cart.length; i++) {
                if (id === cart[i].id) {
                    tr = cart_table.getElementsByTagName("tr");
                    td = tr[cart.length - 1 - i].getElementsByTagName("td")[2];
                    cart[i].quantity = cart[i].quantity + quantity;
                    td.innerHTML = cart[i].quantity;
                    return;
                }
            }
            addToCartTable(cart_table, quantity);
            cart.push({
                id: id,
                quantity: quantity
            });
        }
        function addToCartTable(table, quantity) {
            var row = table.insertRow(0);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            cell1.innerHTML = '<img src="<?PHP echo $item['image_link']; ?>" alt="Demo of <?PHP echo $item['name']; ?>" width="40" height="40">';
            cell2.innerHTML = '<td class="text-left"><?PHP echo $item['name']; ?></td>';
            cell3.className = 'text-right';
            cell3.innerHTML = quantity;
            cell4.className = 'text-right';
            cell4.innerHTML = <?PHP echo $item['price']; ?>;
            cell5.className = 'text-right';
            cell5.innerHTML = <?PHP echo $item['price']; ?> * quantity;
            cell6.innerHTML = totalCart();
        }
        function totalCart() {
            var sum = 0;
            for (var i in cart) {
                sum += cart[i].quantity;
            }
            return sum;
        }
    </script>