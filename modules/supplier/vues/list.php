<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
        <div class="panel-heading clearfix" role="tab" id="headingOne">
            <h4 class="panel-title pull-left">
                <span class="fa fa-user"></span>&nbsp;SUPPLIERS
            </h4>
            <div class="btn-group pull-right">
                <a class="btn btn-sm btn-success" href="#"  data-toggle="modal" data-target="#add-product"><span class="glyphicon glyphicon-plus"></span> New supplier</a>
            </div>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                <table class="table datatable" data-url="products/list">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Contact</th>
                            <th>Etat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GIE mango</td>
                            <td>Fruit</td>
                            <td>(+221)7701010</td>
                            <td>Qualité</td>
                            <td>
                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>GIE Orange</td>
                            <td>Fruit</td>
                            <td>(+221)7701011</td>
                            <td>prospect</td>
                            <td>
                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>GIE Totame</td>
                            <td>Légume</td>
                            <td>(+221)7701012</td>
                            <td>Abandonné</td>
                            <td>
                                   <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr><th>Name</th>
                            <th>Category</th>
                            <th>Contact</th>
                            <th>Etat</th>
                            <th></th>
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