<?PHP
load_db('product');
$cate_id = input_get('cate_id');

$product_list = product_get_list_id($cate_id);
// lay ten catalog 
$cate_name = db_select_row('select * from catalog where id = ' . $cate_id . '');
?>

<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right"><a href="admin/index.php?action=product_add&cate_id=<?PHP echo $cate_id; ?>" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add New Product Into This Catalog"><i class="fa fa-plus"></i></a>
                <a href="admin/index.php?action=cate_list" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Back"><i class="fa fa-reply"></i></a>            </div>
            <h1>Products</h1>
            <ul class="breadcrumb">
                <li><a href="http://localhost/opencart/upload/admin/index.php?route=common/dashboard&amp;token=xAwoFDIcAvsCOiIf6RJLY0xlvKb7hXpC">Home</a></li>
                <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=xAwoFDIcAvsCOiIf6RJLY0xlvKb7hXpC">Products</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i><?PHP echo $cate_name['name']; ?></h3>
            </div>
            <div class="panel-body">
                <!--                <div class="well">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label" for="input-name">Product Name</label>
                                                <input type="text" name="filter_name" value="" placeholder="Product Name" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="input-model">Model</label>
                                                <input type="text" name="filter_model" value="" placeholder="Model" id="input-model" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label" for="input-price">Price</label>
                                                <input type="text" name="filter_price" value="" placeholder="Price" id="input-price" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="input-quantity">Quantity</label>
                                                <input type="text" name="filter_quantity" value="" placeholder="Quantity" id="input-quantity" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label" for="input-status">Status</label>
                                                <select name="filter_status" id="input-status" class="form-control">
                                                    <option value="*"></option>
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="input-image">Image</label>
                                                <select name="filter_image" id="input-image" class="form-control">
                                                    <option value="*"></option>
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                            <button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-filter"></i> Filter</button>
                                        </div>
                                    </div>
                                </div>-->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                                <td class="text-center">Image</td>
                                <td class="text-left">                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=xAwoFDIcAvsCOiIf6RJLY0xlvKb7hXpC&amp;sort=p.status&amp;order=DESC">Product Name</a>
                                </td>
                                <td class="text-right">                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=xAwoFDIcAvsCOiIf6RJLY0xlvKb7hXpC&amp;sort=p.price&amp;order=DESC">Price</a>
                                </td>
                                <td class="text-center">                    <a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=xAwoFDIcAvsCOiIf6RJLY0xlvKb7hXpC&amp;sort=pd.name&amp;order=DESC" class="asc">Infomation</a>
                                </td>  

                                <td class="text-right">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?PHP foreach ($product_list as $item) { ?>
                                <tr>
                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="42">
                                    </td>
                                    <td class="text-center">                    <img src="<?PHP echo $item[image_link]; ?>" alt="Demo of <?PHP echo $item['name']; ?>" width="40" height="40">
                                    </td>
                                    <td class="text-left"> <?PHP echo $item['name']; ?></td>
                                    <td class="text-right"> <div class="text-danger"><?PHP echo $item['price']; ?> </div>
                                    </td>
                                    <td class="text-left"> <div class="text-danger"><?PHP echo $item['content']; ?> </div>

                                    </td>

                                    <td class="text-right">
                                        <form method="post" action="admin/index.php?action=product_delete" >
                                            <input type="hidden" name="product_id" value="<?PHP echo $item['id']; ?>" />
                                            <input type="hidden" name="catalog_id" value="<?PHP echo $item['catalog_id']; ?>" />
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
                    <div class="col-sm-6 text-left"></div>
                    <div class="col-sm-6 text-right">Showing 1 to 19 of 19 (1 Pages)</div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"><!--
        $('#button-filter').on('click', function() {
        var url = 'index.php?route=catalog/product&token=xAwoFDIcAvsCOiIf6RJLY0xlvKb7hXpC';
        var filter_name = $('input[name=\'filter_name\']').val();
        if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_nam        e);
        }

        var filter_model = $('input[name=\'filter_mo        del\']').val();
        if (filter_model) {
        url += '&filter_model=' + encodeURICompo      nent(filter_mod        el);
        }

        var filter_price = $('input[        name=\'filter_price\']').val();
        if (filter_price) {
        url += '&filter_price=' + encode        URIComponent(fi        lter_pr        ice);
        }

        var filter_quantity = $('i        nput[name=\'filter_quant        ity\']').val();
        if (filter_quantity) {
        url += '&filter_quantity=' + e        ncodeURIComp  onen        t(filter_quantity);
        }

        var fil        ter_status = $('sel        ect[name=\'filter_status\']').val();
        if (filter_status != '*') {
        ur        l += '&filter_s        tatus=' + encodeURIComponent(filter_status);
        }

        var filter_image = $('select[name=\'filter_image\']').val();
        if (filter_image != '*') {
        url += '&        filt                 er_ima        ge=' + encodeURIComponent(f         ilt              er_im        age);
        }

        location = url;
        });
        //--></scri            pt>
            <script type="text/javascript"><!--
                                            $('input[name=\'filter_name\']').autocomplete({
                        'source': function(request, response) {
                        $.ajax({
                        url: 'index.php?route=catalog/product/autocomplete&token=xAwoFDIcAvsCOiIf6RJLY0xlvKb7hXpC&filter_name=' + encodeURIComponent(request),
                                dataType: 'json',
                                success: function(json) {
                                response($.map(json, function(item) {
                                return {
                                label: item['name'],
                                        value: item['product_id']
                                                }
                }));
                }
                });
                },
                        'select': function(item) {
                                        $('input[name=\'filter_name\']').val(item['label']);
                }
                });
                                                $('input[name=\'filter_model\']').autocomplete({
                                        'source': function(request, response) {
                                        $.ajax({
                                        url: 'index.php?route=catalog/product/autocomplete&token=xAwoFDIcAvsCOiIf6RJLY0xlvKb7hXpC&filter_model=' + encodeURIComponent(request),
                                                dataType: 'json',
                                                success: function(json) {
                                                response($.map(json, function(item) {
                                                return {
                                                label: item['model'],
                value: item['product_id']
                }
                }));
                }
                        });
                                                    },
                                                    'select': function(item) {
                $('input[name=\'filter_model\']').val(item['label']);
                }
                                            });
                                            //--></script></div>