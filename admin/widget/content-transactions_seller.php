<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

load_db('transaction');
load_db('customer');

if (!isset($_GET["page"])) $page = 1;  else {$page=$_GET["page"];}
$result_per_page = 10;
$start_page=($page-1)*$result_per_page;

$query = 'SELECT t.*,a.name as seller_name,c.name as customer_name FROM `transaction` t JOIN `admin` a ON t.seller_id = a.id JOIN `customer` c ON t.user_id = c.id WHERE a.id='.$_SESSION['id'].' LIMIT '.$start_page.','.$result_per_page.'';
$search_result = filterTable($query);
$num_sql = 'SELECT COUNT(t.id) AS total FROM `transaction` t JOIN `admin` a ON t.seller_id = a.id JOIN `customer` c ON t.user_id = c.id WHERE a.id='.$_SESSION['id'].'';
$total_records = filterTable($num_sql);
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
                <h3 class="panel-title"><i class="fa fa-list"></i> Transactions list</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                                <thead>
                                    <tr >
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
                                    <tr onclick="document.location = 'admin/index.php?action=transaction_info&transaction_id=<?PHP echo $item['id'];?>';">
                                        <td class="text-center"><?PHP echo $item['id']; ?> </td>
                                        <td class="text-center"><?PHP echo $item['seller_id']; ?> </td>
                                        <td class="text-center"><?PHP echo $item['customer_name']; ?> </td>
                                        <td class="text-center"><?PHP echo $item['amount']; ?> </td>
                                        <td class="text-center"><?PHP echo $item['message']; ?> </td>
                                        <td class="text-center"><?PHP echo $item['created']; ?> </td>
                                    </tr>
                                    <?PHP endwhile; }?>

                                </tbody>
                        </table>
               <div class="row">
<!--                    <div class="col-sm-6 text-left"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="">2</a></li><li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;page=2">&gt;</a></li><li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;page=2">&gt;|</a></li></ul></div>-->
                    <div class="col-sm-6 text-left">
                        <ul class="pagination">
                            <li><span>PAGE</span></li>
                            <?PHP 
                        $row = $total_records->fetch_assoc();
                        $total_pages = ceil($row["total"] / $result_per_page); // calculate total pages with results
  
                        for ($i=1; $i<=$total_pages; $i++) { ?> 
                            <li class="<?PHP if($i == $page) echo "active";?>">
                                <a href="admin/index.php?action=transactions&page=<?PHP echo $i;?>"><?PHP echo $i; ?></a>
                            </li>
                            <?PHP } 
                        ?>
                        </ul>
                    </div>
                </div>
           </div>
        </div>
    </div>        
</div>