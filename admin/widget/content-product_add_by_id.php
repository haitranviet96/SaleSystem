<?PHP
$cate_id = input_get('cate_id');
load_db('product');
load_db('category');
$cate_var = cate_get_row($cate_id);

if (isset($_POST['click'])) {
    if (strcmp($_FILES['image']['name'],"") != 0 ) {
        if (file_exists('../public/admin/image_upload/' . $_FILES['image']['name'])) {
            echo '<script language="javascript">';
                echo'alert("File choosen has existed, change filename before uploading");';
                echo'window.location = "admin/index.php?action=product_add_by_id&cate_id='.$cate_id.'"';
            echo '</script>';
        } else {
            move_uploaded_file($_FILES['image']['tmp_name'], '../public/admin/image_upload/' . $_FILES['image']['name']);
            $data = array(
                'catalog_id' => $cate_id,
                'name' => input_post('name'),
                'content' => input_post('content'),
                'price' => input_post('price'),
                'qty' => input_post('qty'),
                'image_link' => 'http://localhost/sales/public/admin/image_upload/' . $_FILES['image']['name']
            );
            product_add($data);
            echo '<script language="javascript">';
                 echo'window.location = "admin/index.php?action=product_list_cate_id&cate_id='.$cate_id.'"';
            echo '</script>';
        }
    } else {
        $data = array(
                'catalog_id' => $cate_id,
                'name' => input_post('name'),
                'content' => input_post('content'),
                'price' => input_post('price'),
                'qty' => input_post('qty'),
                'image_link' => 'http://localhost/sales/public/admin/image_upload/apple_cinema_30-100x100.jpg'
            );
        product_add($data);
        echo '<script language="javascript">';
                echo'alert("Product added without Image");';
                echo'window.location = "admin/index.php?action=product_list_cate_id&cate_id='.$cate_id.'"';
        echo '</script>';
        
    }
}
?>




<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button onclick="$(this).(form - category).submit();" type="submit" form="form-category" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="http://localhost/sales/admin/index.php?action=cate_list" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
            <h1>Products</h1>
            <ul class="breadcrumb">
                <li><a href="">Home</a></li>
                <li><a href="">Products</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Add new product to <?PHP echo $cate_var['name']; ?></h3>
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
<!--                                 <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Category</label>
                                    <div class="col-sm-10">
                                        <select></select>
                                    </div>
                                </div>-->
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