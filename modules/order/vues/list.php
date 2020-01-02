    <div class="panel panel-default">
        <div class="panel-heading clearfix" role="tab" id="headingOne">
            <h4 class="panel-title pull-left">
                <span class="fa fa-print"></span>&nbsp;ORDERS
            </h4>
            <div class="btn-group pull-right">
                <a class="btn btn-sm btn-success" href="#"  data-toggle="modal" data-target="#add-product"><span class="glyphicon glyphicon-plus"></span> New order</a>
            </div>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <table class="table datatable" data-url="orders/list">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($orders as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->id;?></td>
                                        <td><?= $value->prd_name;?></td>
                                        <td><?= $value->op_quantite;?></td>
                                        <td><?= $value->order_date;?></td>
                                        <td><?= $value->ord_statut;?></td>
                                        <td>
                                            <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;
                                            <a href="#"  onclick="deleteEntity(<?php echo $value->id; ?>,'/iso4-crm/orders/delete','/iso4-crm/orders')"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Code</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once 'add.php';
