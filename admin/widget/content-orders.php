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
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Order</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <ul id="order" class="nav nav-tabs nav-justified">
                        <li class="disabled active"><a href="#tab-cart" data-toggle="tab">1. Products</a></li>
                        <li class="disabled"><a href="#tab-customer" data-toggle="tab" >2. Customer Details</a></li>
                        <li class="disabled"><a href="#tab-total" data-toggle="tab" >3. Totals</a></li>
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
                                        <input type="text" id="input_product" class="form-control" placeholder="Search for product.." onkeydown = "if (event.keyCode === 13){
                                                    document.getElementById('button_search').click();}"   />
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
                                        <td class="text-left">                    <a >Product Name</a>
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

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-customer">
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-customer">Customer's name</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="customer_id" value="" />
                                    <input type="text" name="customer" onkeyup="search_Customer(this.value)" placeholder="Customer" id="input-customer" class="form-control" oninput="changeName(this.value)"/>
                                    <ul class="dropdown-menu" id="suggest_panel" style="top: 36px; left: 15px; display: none;">
                                        <!-- show suggestion list of customer-->
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="" id="input-email" class="form-control" oninput="changeEmail(this.value)"/>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="telephone" value="" id="input-telephone" class="form-control" oninput="changePhone(this.value)"/>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-meta-description1">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" rows="5" placeholder="Enter customer's address" id="input-address" class="form-control" oninput="changeAddress(this.value)"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-meta-description1">Customer's Type</label>
                                <div class="col-sm-10">
                                    <select  name="type" class = "form-control" id="input-type" onchange="changeType(this.value)">
                                        <option value="1">Bronze</option>
                                        <option value="2">Silver</option>
                                        <option value="3">Gold</option>
                                    </select>
                                </div>
                            </div>
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
                                            <td class="text-left">Image</td>
                                            <td class="text-left">Product</td>
                                            <td class="text-right">Quantity</td>
                                            <td class="text-right">Unit Price</td>
                                            <td class="text-right">Total</td>
                                        </tr>
                                    </thead>
                                    <tbody id="total" onchange="">
<!--                                        <tr> Show total at last tab
                                            <td class="text-center" colspan="5">No results!</td>
                                        </tr>-->
                                        <tr>  <td class="text-right" colspan="4">Sub-Total:</td>  <td id="sub-total" class="text-right">$0.00</td></tr>
                                        <tr>  <td class="text-right" colspan="4">Discount:</td>  <td id="discount_row" class="text-right">0%</td></tr>
                                        <tr>  <td class="text-right" colspan="4">Total:</td>  <td id="total_row" class="text-right">$0.00</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <fieldset>
                                <legend>Order Details</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Transaction Details</h3>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><button  type="button" data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Date Added"><i class="fa fa-calendar fa-fw"></i></button></td>
                                                        <td id="date" onafterprint="showDate()">dd/mm/yyyy</td>
                                                    </tr>
                                                <script>window.onload = function () {
                                                        showDate();
                                                    };</script>
                                                <tr>
                                                    <td><button  type="button" data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Customer's Type"><i class="fa fa-credit-card fa-fw"></i></button></td>
                                                    <td id="display_type">Bronze Class</td>
                                                </tr>
                                                <tr>
                                                    <td><button  type="button" data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Discount"><i class="fa fa-ticket fa-fw"></i></button></td>
                                                    <td id="display_discount">0% Discount</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 1%;"><button  type="button" data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Total Cash"><i class="fa fa-money fa-fw"></i></button></td>
                                                    <td><a target="_blank" id="total_details">0</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-default">

                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-user"></i> Customer Details</h3>
                                            </div>
                                            <table class="table">
                                                <tbody><tr>
                                                        <td style="width: 1%;"><button type="button" data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Customer"><i class="fa fa-user fa-fw"></i></button></td>
                                                        <td>                <a target="_blank" id="display_name">customer</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><button  type="button" data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="E-Mail"><i class="fa fa-envelope-o fa-fw"></i></button></td>
                                                        <td><a id="display_email">email</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><button  type="button" data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Telephone"><i class="fa fa-phone fa-fw"></i></button></td>
                                                        <td id="display_phone">0123456789</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button  type="button" data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Customer's Address"><i class="fa fa-home fa-fw"></i></button></td>
                                                        <td id="display_address">Address</td>
                                                    </tr>
                                                </tbody></table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-comment">Comment</label>
                                        <div class="col-sm-10">
                                            <textarea name="comment" rows="5" id="input-comment" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="col-sm-6 text-left">
                                    <button type="button" onclick="$('a[href=\'#tab-customer\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button onclick="checkTransaction()" type="button" id="button-save" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var customer_info = [];
    customer_info.type = '1';
    var cart = [];

    function checkTransaction() {
        console.log('check Customer');
        if (cart.length === 0) {
            $('#content>.container-fluid').prepend('<div class="alert alert-danger" ><i class="fa fa-exclamation-circle"></i> Warning: Please check the form carefully. You have not chosen any product yet!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 3500);
        } else if (customer_info.name === undefined || customer_info.email === undefined || customer_info.phone === undefined || customer_info.address === undefined
                || customer_info.name === '' || customer_info.email === '' || customer_info.phone === '' || customer_info.address === '') {
            console.log('error Customer');
            $('#content>.container-fluid').prepend('<div class="alert alert-danger" ><i class="fa fa-exclamation-circle"></i> Warning: Please check the customer form carefully. You have not completed it yet!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 4000);
        } else {
            console.log('ready');
            if (customer_info.id === undefined) {
                customer_mod('ncustomer');
            } else {
                customer_mod('ecustomer');
            }
            var id = add_transaction();
            console.log("id:" + id);
            for (var i = 0; i < cart.length; i++) {
                add_order(id, cart[i].id, cart[i].quantity);
            }
            window.location = "admin/index.php?action=transactions";
        }
    }
    function customer_mod(str) {
        var action = "customer=" + str + "&name=" + customer_info.name + "&email=" + customer_info.email + "&phone=" + customer_info.phone + "&address=" + customer_info.address + "&type=" + customer_info.type + "&id=" + customer_info.id;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            console.log(this.readyState + ' ' + this.status);
            if (this.readyState === 4 && this.status === 200) {
                console.log('ready');
                if (this.responseText === '') {
                    return;
                } else {
                    if (str === 'ncustomer') {
                        customer_info.id = this.responseText;
                    }
                }
            }
        };
        xmlhttp.open("GET", "admin/db/customer.php?" + action, true);
        xmlhttp.send();
    }
    function add_transaction() {
        var transaction = {
            seller_id: "<?php echo $_SESSION['id']; ?>",
            user_id: customer_info.id + "",
            amount: document.getElementById('total_row').innerHTML.replace(/[^\d.]/g, ''),
            message: document.getElementById('input-comment').value,
            created: document.getElementById('date').innerHTML
        };
        var id;
        var action = "tadd=" + JSON.stringify(transaction);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            console.log(this.readyState + ' ' + this.status);
            if (this.readyState === 4 && this.status === 200) {
                console.log('ready');
                if (this.responseText === '') {
                    return;
                } else {
                    console.log("check respond:" + this.responseText);
                    id = this.responseText;
                    return;
                }
            }
        };
        xmlhttp.open("GET", "admin/db/transaction.php?" + action, false);
        xmlhttp.send();
        return id;
    }
    function add_order(transaction_id, product_id, quantity) {
        var order = {
            transaction_id: transaction_id + "",
            product_id: product_id + "",
            qty: quantity + "",
            amount: document.getElementById('total' + product_id).innerHTML.replace(/[^\d.]/g, '')
        };
        var action = "aorder=" + JSON.stringify(order);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            console.log(this.readyState + ' ' + this.status);
            if (this.readyState === 4 && this.status === 200) {
                console.log('ready');
                if (this.responseText === '') {
                    return;
                } else {
                    return this.responseText;
                }
            }
        };
        xmlhttp.open("GET", "admin/db/order.php?" + action, true);
        xmlhttp.send();
    }
    function showDate() {
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
    }
    function changeName(name) {
        console.log('change ' + name);
        customer_info.name = name;
        document.getElementById('display_name').innerHTML = name;
    }
    function changeEmail(email) {
        console.log('change ' + email);
        customer_info.email = email;
        document.getElementById('display_email').innerHTML = email;
    }
    function changePhone(phone) {
        console.log('change ' + phone);
        customer_info.phone = phone;
        document.getElementById('display_phone').innerHTML = phone;
    }
    function changeAddress(address) {
        console.log('change ' + address);
        customer_info.address = address;
        document.getElementById('display_address').innerHTML = address;
    }
    function changeType(type) {
        console.log('change ' + type);
        customer_info.type = type;
        if (type === '1') {
            console.log('change to Bronze');
            document.getElementById('display_type').innerHTML = "Bronze Class";
            document.getElementById('display_discount').innerHTML = "0% Discount";
            document.getElementById('discount_row').innerHTML = "0%";
        } else if (type === '2') {
            console.log('change to Silver');
            document.getElementById('display_type').innerHTML = "Silver Class";
            document.getElementById('display_discount').innerHTML = "5% Discount";
            document.getElementById('discount_row').innerHTML = "5%";
        } else {
            console.log('change to Gold');
            document.getElementById('display_type').innerHTML = "Gold Class";
            document.getElementById('display_discount').innerHTML = "15% Discount";
            document.getElementById('discount_row').innerHTML = "15%";
        }
        changeTotal();
    }
    function search_Customer(str) {
        console.log(str);

        var customer = "fcustomer=" + str;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            console.log(this.readyState + ' ' + this.status);
            if (this.readyState === 4 && this.status === 200) {
                console.log('ready');
                $('#suggest_panel').text('');
                if (this.responseText === '') {
                    document.getElementById("suggest_panel").style.display = "none";
                    return;
                } else {
                    var myObj = JSON.parse(this.responseText);
                    document.getElementById("suggest_panel").style.display = "block";
                    for (var i = 0; i < myObj.length; i++) {
                        console.log(i);
                        suggestCustomer(myObj[i]['id'], myObj[i]['name'], myObj[i]['email'], myObj[i]['phone'], myObj[i]['address'], myObj[i]['type']);
                    }
                }
            }
        };
        xmlhttp.open("GET", "admin/db/customer.php?" + customer, true);
        xmlhttp.send();
    }
    function suggestCustomer(id, name, email, phone, address, type) {
        console.log('id = ' + id);
        var text =
                '<li data-value="' + id + '"><a onmouseup="display_Customer(' + id + ',\'' + name + '\',\'' + email + '\',' + phone + ',\'' + address + '\',' + type + ')">' + name + '</a></li>';
        $('#suggest_panel').append(text);
    }
    function display_Customer(id, name, email, phone, address, type) {
        console.log(name);
        customer_info.id = id;
        document.getElementById("suggest_panel").style.display = "none";
        document.getElementById("input-customer").value = name;
        $('#input-customer').trigger('input');
        document.getElementById("input-email").value = email;
        $('#input-email').trigger('input');
        document.getElementById("input-telephone").value = phone;
        $('#input-telephone').trigger('input');
        document.getElementById("input-address").value = address;
        $('#input-address').trigger('input');
        var sel = document.getElementById('input-type');
        sel.selectedIndex = type - 1;
        $('#input-type').trigger('change');
    }
    function search_Product(str) {
        console.log(str);

        var product = "fproduct=" + str;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            console.log(this.readyState + ' ' + this.status);
            if (this.readyState === 4 && this.status === 200) {
                console.log('ready');
                $('#product-table').text('');
                if (this.responseText === '') {
                    document.getElementById("suggest_panel").style.display = "none";
                    return;
                } else {
                    var myObj = JSON.parse(this.responseText);
                    for (var i = 0; i < myObj.length; i++) {
                        console.log(i);
                        displayProduct(myObj[i]['id'], myObj[i]['image_link'], myObj[i]['name'], myObj[i]['price'], myObj[i]['qty'], myObj[i]['content']);
                    }
                }
            }
        };
        xmlhttp.open("GET", "admin/db/product.php?" + product, true);
        xmlhttp.send();

    }
    function displayProduct(id, image, productName, price, quantity, content) {
        console.log('id = ' + id);
        var text =
                '<tr><td id="img' + id + '" class="text-center"><img src="' + image +
                '" alt="Demo of ' + productName + '" width="40" height="40"></td><td id="name' + id + '" class="text-left">' +
                productName + '</td><td id="price' + id + '" class="text-right">$' + price +
                '</td><td class="text-right">' + quantity +
                '</td><td class="text-left"><div class="text-danger">' + content + '</div></td>\n\
                <td width="125" class="text-right">\n\
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
    function addToCart(id) {
        console.log(id);
        var cart_table = document.getElementById("cart");
        var total_table = document.getElementById("total");

        var box = document.getElementById("product_quantity[" + id + "]");

        var quantity = parseInt(box.value);
        box.value = 0;
        if (quantity === 0)
            return;
        if (cart.length === 0) {// if don't have id in cart -> add new one
            addToCartTable(cart_table, id, quantity);
            addToCartTable(total_table, id, quantity);
            cart.push({
                id: id,
                quantity: quantity
            });
            return changeTotal();
        }
        console.log("length of cart " + cart.length);
        for (var i = 0; i < cart.length; i++) {
            // if already have id in cart change the quantity    
            if (id === cart[i].id) {
                console.log('cart ' + i);
                changeCart(cart_table, i, quantity);
                changeCart(total_table, i, quantity);
                return changeTotal();
            }
        }
        // if don't have id in cart -> add new one
        addToCartTable(cart_table, id, quantity);
        addToCartTable(total_table, id, quantity);

        cart.push({
            id: id,
            quantity: quantity
        });
        return changeTotal();
    }
    // if already have id in cart change the quantity
    function changeCart(cart_table, i, quantity) {
        tr = cart_table.getElementsByTagName("tr");
        td = tr[i].getElementsByTagName("td")[2];
        td1 = tr[i].getElementsByTagName("td")[3];
        td2 = tr[i].getElementsByTagName("td")[4];
        if (cart_table === document.getElementById("cart")) {
            cart[i].quantity = cart[i].quantity + quantity;
        }
        td.innerHTML = cart[i].quantity;
        console.log(Number(td.innerHTML.replace(/[^0-9\.]+/g, "")));
        td2.innerHTML = "$" + td.innerHTML * Number(td1.innerHTML.replace(/[^0-9\.]+/g, ""));
    }
    // if don't have id in cart -> add new one
    function addToCartTable(table, id, quantity) {
        console.log(id);
        if (table === document.getElementById("total")) {
            tr = table.getElementsByTagName("tr");
            var row = table.insertRow(tr.length - 3);
        } else {
            var row = table.insertRow(-1);
        }
        // 1
        var clone = document.getElementById("img" + id).cloneNode(true);
        row.appendChild(clone);
        // 2
        clone = document.getElementById("name" + id).cloneNode(true);
        row.appendChild(clone);
        // 3
        cell3 = row.insertCell(2);
        cell3.className = "text-right";
        cell3.innerHTML = quantity;
        // 4
        clone = document.getElementById("price" + id).cloneNode(true);
        row.appendChild(clone);
        // 5
        cell5 = row.insertCell(4);
        cell5.id = "total" + id;
        cell5.className = "text-right";
        cell5.innerHTML = "$" + quantity * Number(clone.innerHTML.replace(/[^0-9\.]+/g, ""));
        // 6
        if (table !== document.getElementById("total")) {
            cell6 = row.insertCell(5);
            cell6.className = "text-right";
            cell6.innerHTML = '<a onclick="deleteInCart(' + id + ')" title="Delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>';
        }
    }
    function deleteInCart(id) {
        for (var i = 0; i < cart.length; i++) {
            if (id === cart[i].id) {
                var cart_table = document.getElementById("cart");
                var total_table = document.getElementById("total");
                tr = cart_table.getElementsByTagName("tr");
                tr1 = total_table.getElementsByTagName("tr");
                tr[i].remove();
                tr1[i].remove();
                cart.splice(i, 1);
                return changeTotal();
            }
        }
    }
    function changeTotal() {
        document.getElementById("sub-total").innerHTML = "$" + totalCart();
        if (customer_info.type === '3') {
            document.getElementById("total_details").innerHTML = "$" + totalCart() * (1 - 0.15);
            document.getElementById("total_row").innerHTML = "$" + totalCart() * (1 - 0.15);
        } else if (customer_info.type === '2') {
            document.getElementById("total_details").innerHTML = "$" + totalCart() * (1 - 0.05);
            document.getElementById("total_row").innerHTML = "$" + totalCart() * (1 - 0.05);
        } else {
            document.getElementById("total_details").innerHTML = "$" + totalCart();
            document.getElementById("total_row").innerHTML = "$" + totalCart();
        }
    }
    function totalCart() {
        var sum = 0;
        for (var i = 0; i < cart.length; i++) {
            sum += parseInt(Number(document.getElementById("total" + cart[i].id).innerHTML.replace(/[^0-9\.]+/g, "")));
        }
        console.log('total cart is ' + sum);
        return sum;
    }
</script>