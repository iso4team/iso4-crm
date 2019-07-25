<div class="col-md-14 modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" and data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form form-horizontal form-add" name="form-add-order" method="POST" action="orders/add" id="form-add">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="modal-title text-center" id="myModalLabel"> ORDER | ADD </span>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="loading-div alert alert-infos infos-traite">Ajout en cours. Merci de patienter...</div>
                            <div class="form-group">
                                <label for="supplier" class="col-md-4 text-right" align="right"> Supplier</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="supplier" required>
                                        <option value="">Choose a supplier</option>
                                        <?php
                                        foreach ($suppliers as $value) {
                                            ?>
                                            <option value="<?= $value['id']; ?>"><?= $value['usr_first_name'].' '.$value['usr_last_name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product" class="col-md-4 text-right" align="right"> Product</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="product" required>
                                        <option value="">Choose a product</option>
                                        <?php
                                        foreach ($products as $value) {
                                            ?>
                                            <option value="<?= $value['id']; ?>"><?= $value['prd_name']; ?></option>
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
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Annuler</button>
                        <button type="submit" class="btn btn-success" name="add-order" id="add-order"> <span class="glyphicon glyphicon-save"></span> Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>