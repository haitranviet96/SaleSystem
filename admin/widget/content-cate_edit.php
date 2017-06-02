
<?PHP

$action = input_post('cate_edit');
require 'db/category.php';
$id = input_get('cate_id');

$cate = cate_get_row($id);

if($action == 'cate_edit')
{    
    $data = array (
        'name' => input_post('name')
    );
    cate_edit_by_id($id,$data);
    echo '<script language="javascript">';
        echo'window.location = "admin/index.php?action=cate_list"';
    echo '</script>';
}
?>



<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button type="submit" form="form-category" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="http://localhost/sales/admin/index.php?action=cate_list" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
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
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Category</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-general" data-toggle="tab">Category ID = <?PHP echo $cate['id']; ?></a></li>
                    </ul>
                    <input type="hidden" name="cate_edit" value="cate_edit" />
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-general">
                    
                            <div class="tab-content">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-name1">Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?PHP echo $cate['name']; ?>" name="name" placeholder="Input Name" id="name" class="form-control" />
                                    </div>
                                </div>
<!--                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-name1">ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="idcha" value="" placeholder="Input ID" id="idcha" class="form-control" />
                                    </div>
                                </div>-->
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
