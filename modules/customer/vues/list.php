    <div class="panel panel-default">
        <div class="panel-heading clearfix" role="tab" id="headingOne">
            <h4 class="panel-title pull-left">
                <span class="fa fa-users"></span>&nbsp;CUSTOMERS
            </h4>
            <div class="btn-group pull-right">
                <a class="btn btn-sm btn-success" href="#"  data-toggle="modal" data-target="#add-customer"><span class="glyphicon glyphicon-plus"></span> New customer</a>
            </div>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <table class="table datatable" data-url="customers/list">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($customers as $value) {
                                    ?>
                                <tr>
                                    <td><?= $value->usr_first_name;?></td>
                                    <td><?= $value->usr_phone;?></td>
                                    <td><?= $value->usr_email;?></td>
                                    <td>
                                        <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;
                                        <a href="#"  onclick="deleteEntity(<?php echo $value->id; ?>,'/iso4-crm/customers/delete','/iso4-crm/customers')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th></th>
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
