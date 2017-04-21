<?PHP
$action = input_post('cate_add');
require 'db/category.php';

if($action == 'cate_add')
{  
    $data = array (
        'name' => input_post('name'),
    );
    cate_add($data);

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
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Category</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
                    </ul>
                    <input type="hidden" name="cate_add" value="cate_add" />
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-general">
                    
                            <div class="tab-content">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-name1">Catalog Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="" placeholder="Input Name" id="name" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>
    <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />
    <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> 
    <script type="text/javascript"><!--
$('input[name=\'path\']').autocomplete({
            'source': function (request, response) {
                $.ajax({
                    url: 'index.php?route=catalog/category/autocomplete&token=JmSdYPZImfpo6PtZAxAwU4gJ3mvKiN3F&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            category_id: 0,
                            name: ' --- None --- '
                        });

                        response($.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item[                                'category                        _id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                $('input[name=\'path\']                        ').val(item['label']);
                $('input[name=\'parent_id\']').val(item['value']);
            }
        });
//--></script> 
                            <script type="text/javascript"><!--
        $('input[name=\'filter\']').autocomplete({
                                    'source': function (request, response) {
                                        $.ajax({
                                            url: 'index.php?route=catalog/filter/autocomplete&token=JmSdYPZImfpo6PtZAxAwU4gJ3mvKiN3F&filter_name=' + encodeURIComponent(request),
                                            dataType: 'json',
                                            success: function (json) {
                                                response($.map(json, function (item) {
                                                    return {
                                                        label: item['name'],
                                                        value: item['filter_id']
                                                    }
                                                }));
                                            }
                                        });
                                    },
                                    'select': function (item) {
                                        $('input[name=\'filter\']').val('');

                                        $('#category-filter' + item['value']).remove();

                                        $('#category-filter').append('<div id="category-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category_filter[]" value="' + item['value'] + '" /></div>');
                                    }
                                });

                                $('#category-filter').delegate('.fa-minus-circle', 'click', function () {
                                    $(this).parent().remove();
                                });
                                //--></script> 
  <script type="text/javascript"><!--
                                $('#language a:first').tab('show');
//--></script></div>
