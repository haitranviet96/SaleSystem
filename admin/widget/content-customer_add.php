<?PHP
$action = input_post('customer_add');
require 'db/customer.php';

if($action == 'customer_add')
{  
    $data = array (
        'name' => input_post('name'),
        'email' => input_post('email'),
        'phone' => input_post('phone'),
        'address' => input_post('address'),
        'type' => input_post('type')
    );
    customer_add($data);
    echo '<script language="javascript">';
        echo'window.location = "admin/index.php?action=customer_list"';
    echo '</script>';
}
?>

<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button onclick="$(this).(form - customer).submit();" type="submit" form="form-customer" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="http://localhost/sales/admin/index.php?action=customer_list" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="fa fa-reply"></i></a>
            </div>
            <h1>New Customer</h1>
            <ul class="breadcrumb">
                <li><a href="">Home</a></li>
                <li><a href="">Customers</a></li>
            </ul>
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
                    <input type="hidden" name="customer_add" value="customer_add" />
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-general">

                            <div class="tab-content">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-name1">Customer's name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="" placeholder="Input name of the buyer" id="name" class="form-control" />
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
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Customer's Type</label>
                                    <div class="col-sm-10">
                                    <select  name="type" class = "form-control">
                                        <option value="1">Bronze</option>
                                        <option value="2">Silver</option>
                                        <option value="3">Gold</option>
                                    </select>
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
