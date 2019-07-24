<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading clearfix" role="tab" id="headingOne">
            <h4 class="panel-title pull-left">
                <span class="fa fa-laptop"></span>&nbsp;CUSTOMERS
            </h4>
            <div class="btn-group pull-right">
                <a class="btn btn-sm btn-success" href="#"  data-toggle="modal" data-target="#add-product"><span class="glyphicon glyphicon-plus"></span> New customer</a>
            </div>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <table class="table datatable" data-url="products/list">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmet THIAM</td>
                            <td>221770000000</td>
                            <td>iso4digit@uvs.edu.sn</td>
                            <td>
                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Ahmet THIAM</td>
                            <td>221770000000</td>
                            <td>iso4digit@uvs.edu.sn</td>
                            <td>
                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Ahmet THIAM</td>
                            <td>221770000000</td>
                            <td>iso4digit@uvs.edu.sn</td>
                            <td>
                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'add.php';