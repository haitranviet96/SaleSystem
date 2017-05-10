<?php
load_db('transaction');
load_db('customer');
$transaction = transaction_get_list();
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
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <!--<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>-->
                                <td class="text-left">                    <a>ID</a>
                                </td>
                                <td class="text-left">                    <a>Customer Name</a>
                                </td>
                                <td class="text-left">                    <a>Status</a>
                                </td>
                                <td class="text-left">                    <a>Total</a>
                                </td>
                                <td class="text-left">                    <a>Date</a>
                                </td>
                                <td class="text-left">                    <a>Details</a>
                                </td>
                                <td class="text-right">Option</td>

                            </tr>
                        </thead>
                        <tbody>
                            <?PHP foreach ($transaction as $item) {
                                ?>
                                <tr>
                                    <!--<td class="text-center">                    <input type="checkbox" name="selected[]" value="33" />-->
                                    <!--</td>-->
                                    <td class="text-left"><?PHP echo $item['id']; ?> </a></td>
                                    <td class="text-left"><?PHP $customer = customer_get_row($item['user_id']); echo $customer['name']; ?></td>
                                    <td class="text-left"><?PHP echo $item['status']; ?></td>
                                    <td class="text-left"><?PHP echo $item['amount']; ?></td>
                                    <td class="text-left"><?PHP echo $item['created']; ?></td>
                                    <!--<td class="text-left"><?PHP if($item['type'] == 1){echo '0%';}else if($item['type'] == 2){echo '5%';}else{echo '15%';}?></td>-->
                                    <td class="text-left"><?PHP echo $item['message']; ?></td>
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
                    <div class="col-sm-6 text-left"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="">2</a></li><li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;page=2">&gt;</a></li><li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;page=2">&gt;|</a></li></ul></div>
                    <div class="col-sm-6 text-right">Showing 1 to 20 of 38 (2 Pages)</div>
                </div>
            </div>
        </div>
    </div>
</div>

