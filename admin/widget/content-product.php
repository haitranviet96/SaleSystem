<?php

load_db('product');
//$product = product_get_list();
if (!isset($_GET["page"])) $page = 1;  else {$page=$_GET["page"];}
$result_per_page = 10;
$start_page=($page-1)*$result_per_page;
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `product` WHERE CONCAT(`id`, `name`, `price`, `qty`) LIKE '%".$valueToSearch."%' LIMIT ".$start_page.",".$result_per_page;
    $num_sql="SELECT COUNT('id') AS total FROM `product` WHERE CONCAT(`id`, `name`, `price`, `qty`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    $total_records = filterTable($num_sql);
    
}
 else {
    $query = "SELECT * FROM `product` LIMIT ".$start_page.",".$result_per_page;
    $search_result = filterTable($query);
    $num_sql = "SELECT COUNT(id) AS total FROM `product`";
    $total_records = filterTable($num_sql);
}

// function to connect and execute the query
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
    <div class ="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <a href="admin/index.php?action=product_add" data-toggle="tooltip" title="Add New Product" class="btn btn-primary">
                    <i class="fa fa-plus"></i></a> <a href="admin/index.php?action=product" data-toggle="tooltip" title="Rebuild" class="btn btn-default"><i class="fa fa-refresh"></i></a>
<!--                <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-danger" onclick="confirm('Are you sure?') ? $('#form-category').submit() : false;"><i class="fa fa-trash-o"></i></button>-->
            </div>
            <h1>Products</h1>
            <ul class="breadcrumb">
                <li><a >Home</a></li>
                <li><a >Product</a></li>
            </ul>
        </div> 
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Product list</h3>
            </div>
            <form action="admin/index.php?action=product" method="post">
            <div class="panel-body">
<!--                <div class="well">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="input-name">Product Name</label>
                                <input type="text" name="filter_name" value="" placeholder="Product Name" id="input-name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-model">Model</label>
                                <input type="text" name="filter_model" value="" placeholder="Model" id="input-model" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="input-price">Price</label>
                                <input type="text" name="filter_price" value="" placeholder="Price" id="input-price" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-quantity">Quantity</label>
                                <input type="text" name="filter_quantity" value="" placeholder="Quantity" id="input-quantity" class="form-control" />
                            </div>
                            <button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-filter"></i> Filter</button>
                        </div>

                    </div>
                </div>-->
                 <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
                    <input type="submit" name="search" value="Search"><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="shitty_table">
                        <thead>
                            <tr>
                                <!--<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>-->
                                <td class="text-left">                    <a>Image</a>
                                </td>
                                <td class="text-left">                    <a>Product Name</a>
                                </td>

                                <td class="text-left">                    <a>Price</a>
                                </td>
                                <td class="text-left">                    <a>Quantity</a>
                                </td>
                                <td class="text-left">                    <a>Information</a>
                                </td>
                                <td class="text-left">                    <a>Action</a>
                                </td>

                            </tr>
                        </thead>
                        <tbody>
                            <?PHP while($item = mysqli_fetch_array($search_result)):
                                ?>
                                <tr>
                                    <!--<td class="text-center">                    <input type="checkbox" name="selected[]" value="33" />-->
                                    <!--</td>-->
                                    <td class="text-center"><img src="<?PHP echo $item['image_link']; ?>" alt="Demo of <?PHP echo $item['name']; ?>" width="40" height="40">
                                    </td>
                                    <td class="text-left"><?PHP echo $item['name']; ?></td>
                                    <td class="text-left"><?PHP echo $item['price']; ?></td>
                                    <td class="text-left"><?PHP echo $item['qty']; ?></td>
                                    <td class="text-left"> <div class="text-danger"><?PHP echo $item['content']; ?> </div>

                                    </td>
                                    <td class="text-right">
                                        <form method="post" action="admin/index.php?action=product_delete" >
                                            <input type="hidden" name="product_id" value="<?PHP echo $item['id']; ?>" />
                                            <a href="admin/index.php?action=product_edit&product_id=<?PHP echo $item['id'] ?>" title="Edit" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                            <a href="" onclick="$(this).parent().submit(); return false;" title="Delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </form>
                                    </td>


                                </tr>
                            <?PHP endwhile; ?>
                       
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
                            <li class="<?PHP if($i == $page) echo "active";?>">
                                <a href="admin/index.php?action=product&page=<?PHP echo $i;?>"><?PHP echo $i; ?></a>
                            </li>
                            <?PHP } 
                        ?>
                        </ul>
                    </div>
                </div>
            </div></form>
        </div>
    </div>
</div>

