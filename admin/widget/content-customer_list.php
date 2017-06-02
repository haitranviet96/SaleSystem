<?php
load_db('customer');
//$customer = customer_get_list();
if (!isset($_GET["page"])) $page = 1;  else {$page=$_GET["page"];}
$result_per_page = 10;
$start_page=($page-1)*$result_per_page;
$sql = "SELECT * FROM `customer` LIMIT ".$start_page.",".$result_per_page;
$num_sql = "SELECT COUNT(id) AS total FROM `customer` ";
$customer = filterTable($sql);
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
                <a href="admin/index.php?action=customer_add" data-toggle="tooltip" title="Add New Customer" class="btn btn-primary">
                    <i class="fa fa-plus"></i></a> <a href="admin/index.php?action=customer_list" data-toggle="tooltip" title="Rebuild" class="btn btn-default"><i class="fa fa-refresh"></i></a>
<!--                <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-danger" onclick="confirm('Are you sure?') ? $('#form-category').submit() : false;"><i class="fa fa-trash-o"></i></button>-->
            </div>
            <h1>Customers</h1>
            <ul class="breadcrumb">
                <li><a href="">Home</a></li>
                <li><a href="">Customers</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Customers list</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!--<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>-->
                                <td class="text-left">                    <a>ID</a>
                                </td>
                                <td class="text-left">                    <a>Customer Name</a>
                                </td>
                                <td class="text-left">                    <a>E-mail</a>
                                </td>
                                <td class="text-left">                    <a>Phone Number</a>
                                </td>
                                <td class="text-left">                    <a>Address</a>
                                </td>
                                <td class="text-left">                    <a>Discount</a>
                                </td>
                                <td class="text-right">Option</td>

                            </tr>
                        </thead>
                        <tbody>
                            <?PHP foreach ($customer as $item) {
                                ?>
                                <tr>
                                    <!--<td class="text-center">                    <input type="checkbox" name="selected[]" value="33" />-->
                                    <!--</td>-->
                                    <td class="text-left"><?PHP echo $item['id']; ?> </a></td>
                                    <td class="text-left"><?PHP echo $item['name']; ?></td>
                                    <td class="text-left"><?PHP echo $item['email']; ?></td>
                                    <td class="text-left"><?PHP echo $item['phone']; ?></td>
                                    <td class="text-left"><?PHP echo $item['address']; ?></td>
                                    <td class="text-left"><?PHP if($item['type'] == 1){echo '0%';}else if($item['type'] == 2){echo '5%';}else{echo '15%';}?></td>
                                    <td class="text-right">
                                        <form method="post" action="admin/index.php?action=customer_delete" >
                                            <input type="hidden" name="customer_id" value="<?PHP echo $item['id']; ?>" />
                                            <a href="admin/index.php?action=customer_edit&customer_id=<?PHP echo $item['id'] ?>" title="Edit" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                            <a href="" onclick="$(this).parent().submit(); return false;" title="Delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </form>
                                    </td>


                                </tr>
                            <?PHP } ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
<!--                    <div class="col-sm-6 text-left"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="">2</a></li><li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;page=2">&gt;</a></li><li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;page=2">&gt;|</a></li></ul></div>-->
                    <div class="col-sm-6 text-left">
                        <ul class="pagination">
                            <li><span>PAGE</span></li>
                            <?PHP 
                        $row = $total_records->fetch_assoc();
                        $total_pages = ceil($row["total"] / $result_per_page); // calculate total pages with results
  
                        for ($i=1; $i<=$total_pages; $i++) { ?> 
                            <li class="active <?PHP echo $i;?>">
                                <a href="admin/index.php?action=customer_list&page=<?PHP echo $i;?>"><?PHP echo $i; ?></a>
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

