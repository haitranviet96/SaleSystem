<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$action = input_post('product_edit');
require 'db/product.php';
$id = input_get('product_id');
$cate_id = input_get('cate_id');
$product = product_get_row($id);

if($action == 'product_edit')
{  
//    $data = array (
//        'name' => input_post('name'),
//        'price' => input_post('price'),
//        'qty' => input_post('qty'),
//        'content' => input_post('content'),
//        'image_link' => input_post('image_link')
//    );
//    product_edit_by_id($id,$data);
//    echo '<script language="javascript">';
//        echo'window.location = "admin/index.php?action=product_list_cate_id&cate_id='.$cate_id.'"';
//    echo '</script>';
    if(strcmp($_FILES['image']['name'],"") != 0 ){
            move_uploaded_file($_FILES['image']['tmp_name'], '../public/admin/image_upload/' . $_FILES['image']['name']);
            $data = array(
//                'catalog_id' => $cate_id,
                'name' => input_post('name'),
                'qty' => input_post('qty'),
                'content' => input_post('content'),
                'price' => input_post('price'),
                'image_link' => 'http://localhost/sales/public/admin/image_upload/' . $_FILES['image']['name']
            );
            product_edit_by_id($id,$data);
            echo '<script language="javascript">';
                 echo'window.location = "admin/index.php?action=product_list_cate_id&cate_id='.$cate_id.'"';
            echo '</script>';
            
    }
    else {
         $data = array(
//                'catalog_id' => $cate_id,
                'name' => input_post('name'),
                'qty' => input_post('qty'),
                'content' => input_post('content'),
                'price' => input_post('price'),
//                'image_link' => 'http://localhost/sales/public/admin/image_upload/' . $_FILES['image']['name']
            );
            product_edit_by_id($id,$data);
            echo '<script language="javascript">';
                 echo'window.location = "admin/index.php?action=product_list_cate_id&cate_id='.$cate_id.'"';
            echo '</script>';
        
    }
}
?>

<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button type="submit" form="form-customer" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="http://localhost/sales/admin/index.php?action=product_list_cate_id" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="fa fa-reply"></i></a>
            </div>
            <h1>Edit Product</h1>
            <ul class="breadcrumb">
                <li><a href="">Home</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">Product</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Product</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-general" data-toggle="tab">Product ID = <?php echo $product['id'];?></a></li>
                    </ul>
                    <input type="hidden" name="product_edit" value="product_edit" />
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-general">

                            <div class="tab-content">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-name1">Product's name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="<?php echo $product['name'];?>" placeholder="Input name of the product" id="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Price</label>
                                    <div class="col-sm-10">
                                        <input name="price" value="<?php echo $product['price'];?>" type="price" rows="5" placeholder="Input price" id="input-meta-description1" class="form-control"/>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" value="<?php echo $product['qty'];?>" name="qty" rows="5" placeholder="Input quantity" id="input-meta-description1" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-meta-description1">Content</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" rows="5" placeholder="Enter product's content" id="input-meta-description1" class="form-control" ><?php echo $product['content'];?></textarea>
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
</div>