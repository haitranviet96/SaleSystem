<?php
$transaction = input_get('transaction_id');
$sql = "SELECT o.*,p.name as product_name FROM `order` o JOIN `product` p ON o.product_id = p.id WHERE o.transaction_id='".$transaction."' ";

$search_result = filterTable($sql);

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
?>
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
                <li><a >Home</a></li>
                <li><a >Sales</a></li>
                <li><a >Transactions</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Transactions Info</h3>
            </div>
            <div class="panel-body">
                 <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-general" data-toggle="tab">Transaction ID = <?php echo $transaction;?></a></li>
                 </ul>
                <table class="table table-bordered table-hover">
                                <thead>
                                    <tr >
                                        <td class="text-center">                    <a>Product ID</a>
                                        </td>
                                        <td class="text-center">                    <a >Product Name</a>
                                        </td>
                                        <td class="text-center">                    <a >Quantity </a>
                                        </td>
                                        <td class="text-center">                    <a >Total</a>
                                        </td>
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody id="transaction-table">
                                    <?PHP 
                                    if($search_result == null) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?PHP echo "No records found !"; ?></td>
                                    </tr>
                                    <?PHP
                                    }
                                    else {
                                        while($item = mysqli_fetch_array($search_result)):
                                    ?>
                                    <tr>
                                        <td class="text-center"><?PHP echo $item['product_id']; ?> </td>
                                        <td class="text-center"><?PHP echo $item['product_name']; ?> </td>
                                        <td class="text-center"><?PHP echo $item['qty']; ?> </td>
                                        <td class="text-center"><?PHP echo $item['amount']; ?> </td>
                                       
                                    </tr>
                                    <?PHP endwhile; }?>

                                </tbody>
                        </table>
               <div class="row">

                </div>
           </div>
        </div>
    </div>        
</div>