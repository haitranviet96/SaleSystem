<?PHP
require 'db/product.php';
load_db('category');

$query="SELECT * FROM `catalog`";
$search_result = filterTable($query);
//if (isset($_POST['click'])) {
//    if (strcmp($_FILES['image']['name'],"") != 0 ) {
//        
//            move_uploaded_file($_FILES['image']['tmp_name'], '../public/admin/image_upload/' . $_FILES['image']['name']);
//            $data = array(
//                'catalog_id' => input_post('cate'),
//                'name' => input_post('name'),
//                'content' => input_post('content'),
//                'price' => input_post('price'),
//                'qty' => input_post('qty'),
//                'image_link' => 'http://localhost/sales/public/admin/image_upload/' . $_FILES['image']['name']
//            );
//            product_add($data);
//            echo '<script language="javascript">';
//                echo'window.location = "admin/index.php?action=product"';
//            echo '</script>';
//        
//    } else {
//        $data = array(
//                'catalog_id' => input_post('cate'),
//                'name' => input_post('name'),
//                'content' => input_post('content'),
//                'price' => input_post('price'),
//                'qty' => input_post('qty'),
//                'image_link' => 'http://localhost/sales/public/admin/image_upload/apple_cinema_30-100x100.jpg'
//            );
//        product_add($data);
//        echo '<script language="javascript">';
//                echo'alert("Product added without Image");';
//                echo'window.location = "admin/index.php?action=product"';
//        echo '</script>';
//        
//    }
//}

if (isset($_POST['click'])) {
    if (strcmp($_FILES['image']['name'],"") != 0 ) {
       
            move_uploaded_file($_FILES['image']['tmp_name'], '../public/admin/image_upload/' . $_FILES['image']['name']);
            $data = array(
                'catalog_id' => input_post('cate'),
                'name' => input_post('name'),
                'content' => input_post('content'),
                'price' => input_post('price'),
                'qty' => input_post('qty'),
                'image_link' => 'http://localhost/sales/public/admin/image_upload/' . $_FILES['image']['name']
            );
            product_add($data);
            echo '<script language="javascript">';
                 echo'window.location = "admin/index.php?action=product"';
            echo '</script>';
        
    } else {
        $data = array(
                'catalog_id' => input_post('cate'),
                'name' => input_post('name'),
                'content' => input_post('content'),
                'price' => input_post('price'),
                'qty' => input_post('qty'),
                'image_link' => 'http://localhost/sales/public/admin/image_upload/apple_cinema_30-100x100.jpg'
            );
        product_add($data);
        echo '<script language="javascript">';
                echo'alert("Product added without Image");';
                echo'window.location = "admin/index.php?action=product"';
        echo '</script>';
        
    }
}

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
                <button onclick="$(this).(form - category).submit();" type="submit" form="form-category" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="http://localhost/sales/admin/index.php?action=product" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
            <h1>All products</h1>
            <ul class="breadcrumb">
                <li><a href="">Home</a></li>
                <li><a href="">All products</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Add new product</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">
                    <input type="hidden" name="click" value="clicked" />
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
                    </ul>
                    <input type="hidden" name="product_add" value="product_add" />
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-general">

                            <div class="tab-content">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-name1">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="" placeholder="Input name of the product" id="name" class="form-control" />
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Category</label>
                                    <div class="col-sm-10">
                                        <select name="cate" class = "form-control">
                                            <?PHP while($item = mysqli_fetch_array($search_result)): ?>
                                            <option value="<?PHP echo $item['id'] ?>"> <?PHP echo $item['name'] ?></option>
                                            <?PHP endwhile;?>         
                                        </select>
                                    </div>
                                  </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Price</label>
                                    <div class="col-sm-10">
                                        <input name="price" rows="5" placeholder="How much does it cost?" id="input-meta-description1" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Quantity</label>
                                    <div class="col-sm-10">
                                        <input name="qty" rows="5" placeholder="How many?" id="input-meta-description1" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" rows="5" placeholder="Enter some short details" id="input-meta-description1" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Image for product</label>
                                    <div class="col-sm-10">
                                        <input type="file"  id="image" name="image">
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
