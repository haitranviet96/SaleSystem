<?php
load_db('transaction');
load_db('customer');
load_db('admin');
$transaction = transaction_get_list();
$query_admin = "SELECT id,name FROM admin GROUP BY id";
$search_result = filterTable($query_admin);
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "banhang2");
    $filter_Result = mysqli_query($connect, $query);
    if (!$filter_Result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
    }
    return $filter_Result;
}
//session_start();
//session_destroy();
//
//session_start();

?>

<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <!--<a href="admin/index.php?action=customer_add" data-toggle="tooltip" title="Add New Customer" class="btn btn-primary"> <i class="fa fa-plus"></i></a>-->
            <a href="admin/index.php?action=transactions" data-toggle="tooltip" title="Rebuild" class="btn btn-default"><i class="fa fa-refresh"></i></a>
<!--                <button type="buttoxn" data-toggle="tooltip" title="Delete" class="btn btn-danger" onclick="confirm('Are you sure?') ? $('#form-category').submit() : false;"><i class="fa fa-trash-o"></i></button>-->
            </div>
            <h1>Transactions</h1>
            <ul class="breadcrumb">
                <li><a href="admin/index.php">Home</a></li>
                <li><a href="admin/index.php">Sales</a></li>
                <li><a href="admin/index.php?action=transactions">Transactions</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Transactions list</h3>
            </div>
            <div class="panel-body">
                
                        <fieldset>
<!--                                <legend>Transaction</legend>-->
                                <div class="form-group" id="admin">
                                    <label class="col-sm-2 control-label" for="input-seller" style="b">Seller Name</label>
                                    <div class="col-sm-8">
<!--                                        <input type="text" name="product" id="input_product" class="form-control" placeholder="Search for seller.." onkeydown = "if (event.keyCode == 13) document.getElementById('button_search').click()"   />-->
                                      <!--<input type="hidden" name="product_id" value="" />-->
                                        <select  name="seller_id" class="form-control" id="input_seller">
                                            <?PHP while($item = mysqli_fetch_array($search_result)): ?>
                                            <option value="<?PHP echo $item['id']?>"><?PHP echo $item['name']?></option>
                                            <?PHP endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" id="button_search" class="btn btn-primary">
                                    <i class="fa fa-filter"></i> Search </button>
                                    </div>
                                </div>
                        </fieldset>
                        <script type="text/javascript">
                                (function () {
                                    document.getElementById("button_search").onclick = function () {
                                        search_Transaction(document.getElementById("input_seller").value);
                                        console.log(document.getElementById("input_seller").value);
                                    };
                                })();
                        </script>
                        <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td class="text-center">ID</td>
                                        <td class="text-center">                    <a >Seller ID</a>
                                        </td>
                                        <td class="text-center">                    <a >Customer name</a>
                                        </td>
                                        <td class="text-center">                    <a >Amount</a>
                                        </td>
                                        <td class="text-center">                    <a >Message</a>
                                        </td>
                                        <td class="text-center">Created</td>
                                    </tr>
                                </thead>
                                <tbody id="transaction-table">
                                    
                                </tbody>
                        </table>

            </div>
        </div>
    </div>
</div>
<script>
        function search_Transaction(str) {
//            console.log(str);

                var seller_id = "fseller_id=" + str;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    console.log(this.readyState + ' ' + this.status);
                    if (this.readyState === 4 && this.status === 200) {
                        console.log('ready');
                       
                        try{                            
                            if(!this.responseText) throw "No records found!";
                            else var myObj = JSON.parse(this.responseText);
                        }catch(err){
                            document.getElementById("transaction-table").innerHTML= "No records found!";
                            return false;
                        }
                        $('#transaction-table').text('');
                        for (var i = 0; i < myObj.length; i++) {
                            console.log(i);
                            displayTrans(myObj[i]['id'], myObj[i]['seller_id'], myObj[i]['customer_name'], myObj[i]['amount'], myObj[i]['message'], myObj[i]['created']);
                        }
                    }
                };
                xmlhttp.open("GET", "admin/db/transaction.php?" + seller_id, true);
                xmlhttp.send();
            
        }
        function displayTrans(id, seller_id, customer_name, amount, message, created) {
            console.log('id = ' + id);
            var text =
                    '<tr><td id="' + id + '" class="text-center">'+ id + '</td><td class="text-center">' +
                    seller_id + '</td><td class="text-center">' + customer_name +
                    '</td><td class="text-center">' + amount +
                    '</td><td class="text-center">' + message+ 
                    '</td><td class="text-center">' + created +
                    '</td></tr>';
            $('#transaction-table').append(text);
        }
</script>