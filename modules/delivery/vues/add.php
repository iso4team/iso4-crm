<div class="col-md-14 modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" and data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form form-horizontal form-add" name="form-add-delivery" method="POST" action="deliveries/add" id="form-add" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="modal-title text-center" id="myModalLabel"> DELIVERY | SAVE </span>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="loading-div alert alert-infos infos-traite">Ajout en cours. Merci de patienter...</div>
                            <div class="form-group">
                                <label for="order" class="col-md-4 text-right" align="right"> Order</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="order" required>
                                        <option value="">Choose a order</option>
                                        <?php
                                        foreach ($orders as $value) {
                                            ?>
                                            <option value="<?= $value->op_id; ?>"><?= "(".$value->op_quantite.") ".$value->prd_name; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quantity" class="col-md-4 text-right" align="right"> Quantity</label>
                                <div class="col-md-8">
                                    <input type="number" name="quantity" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bl" class="col-md-4 text-right" align="right"> BL</label>
                                <div class="col-md-8">
                                    <input type="file" name="bl" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-success" name="add-delivery" id="add-delivery"> <span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>