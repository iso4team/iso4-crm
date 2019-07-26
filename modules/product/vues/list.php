<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading clearfix" role="tab" id="headingOne">
            <h4 class="panel-title pull-left">
                <span class="fa fa-product-hunt"></span>&nbsp;PRODUCTS
            </h4>
            <div class="btn-group pull-right">
                <a class="btn btn-sm btn-success" href="#"  data-toggle="modal" data-target="#add-product"><span class="glyphicon glyphicon-plus"></span> New product</a>
            </div>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <table class="table table-hover datatable" data-url="products/list">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Stock</th>
                                    <th>Store</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($products as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value['prd_name'];?></td>
                                        <td><?= $value['prd_price'];?> $</td>
                                        <td><?= $value['category'];?></td>
                                        <td>10</td>
                                        <td><?= (isset($value['store'])) ? $value['store'] : "N/A";?></td>
                                        <td>
                                            <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp; 
                                            <i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;
                                            <a href="#"  onclick="deleteEntity(<?php echo $value['id']; ?>,'/iso4-crm/products/delete','/iso4-crm/products')"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Stock</th>
                                    <th>Store</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'add.php';
