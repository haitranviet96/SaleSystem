<?PHP
load_db('category');
$cate = cate_get_list();
?>

<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right"><a href="admin/index.php?action=cate_add" data-toggle="tooltip" title="Add New Catalog" class="btn btn-primary"><i class="fa fa-plus"></i></a> <a href="admin/index.php?action=cate_list" data-toggle="tooltip" title="Rebuild" class="btn btn-default"><i class="fa fa-refresh"></i></a>
<!--                <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-danger" onclick="confirm('Are you sure?') ? $('#form-category').submit() : false;"><i class="fa fa-trash-o"></i></button>-->
            </div>
            <h1>Categories</h1>
            <ul class="breadcrumb">
                <li><a href="">Home</a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Category list</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                                <td class="text-left">                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;sort=name&amp;order=DESC" class="asc">Category Name</a>
                                </td>
                                <td class="text-left">                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=hPtHjo2YGjzmxeBLD68JxRHTz3tDIu3V&amp;sort=sort_order&amp;order=DESC">ID nhóm</a>
                                </td>
                                <td class="text-right">Tùy chọn</td>

                            </tr>
                        </thead>
                        <tbody>
                            <?PHP foreach ($cate as $item) {
                                ?>
                                <tr>
                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="33" />
                                    </td>
                                    <td class="text-left"><a href="admin/index.php?action=product_list_cate_id&cate_id=<?php echo $item['id']; ?>" > <?PHP echo $item['name']; ?> </a></td>
                                    <td class="text-left"><?PHP echo $item['id']; ?></td>
                                    <td class="text-right">
                                        <form method="post" action="admin/index.php?action=cate_delete" >
                                            <input type="hidden" name="cate_id" value="<?PHP echo $item['id']; ?>" />
                                            <a href="admin/index.php?action=cate_edit&cate_id=<?PHP echo $item['id'] ?>" title="Edit" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
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
