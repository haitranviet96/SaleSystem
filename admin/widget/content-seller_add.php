<?PHP
$action = input_post('admin_add');
require 'db/admin.php';

if($action == 'admin_add')
{  
    $data = array (
        'name' => input_post('name'),
        'password' => input_post('password'),
        'email' => input_post('email'),
        'phone' => input_post('phone'),
        'address' => input_post('address'),
        'permission' => 0
    );
    admin_add($data);
    echo '<script language="javascript">';
        echo'window.location = "admin/index.php?action=seller_list"';
    echo '</script>';
}
?>

<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button onclick="$(this).(form - customer).submit();" type="submit" form="form-customer" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="http://localhost/sales/admin/index.php?action=list_admins" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="fa fa-reply"></i></a>
            </div>
            <h1>New Seller</h1>
            
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i>Fill in the form below</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data" id="form-customer" class="form-horizontal">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-general" data-toggle="tab">Profile</a></li>
                    </ul>
                    <input type="hidden" name="admin_add" value="admin_add" />
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-general">

                            <div class="tab-content">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-name1">Seller's name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="" placeholder="Input addmin name" id="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Password</label>
                                    <div class="col-sm-10">
                                        <input name="password" type="password" rows="5" placeholder="Input password" id="input-meta-description1" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" type="email" rows="5" placeholder="Input email" id="input-meta-description1" class="form-control"/>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Phone number</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="phone" rows="5" placeholder="Input phone number" id="input-meta-description1" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Address</label>
                                    <div class="col-sm-10">
                                        <textarea name="address" rows="5" placeholder="Enter customer's address" id="input-meta-description1" class="form-control"></textarea>
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
//--></s            crip                                t> 
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
                       