<div class="col-md-14 modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" and data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form form-horizontal form-add" name="form-add-product" method="POST" action="products/add" id="form-add" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="modal-title text-center" id="myModalLabel"> PRODUCT | ADD </span>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="loading-div alert alert-infos infos-traite">Ajout en cours. Merci de patienter...</div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name"> Name </label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required >
                                </div>
                                <div class="col-md-6">
                                    <label for="price"> Price </label>
                                    <input type="number" name="price" id="price" class="form-control" placeholder="Price" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="category"> Category </label>
                                    <select class="form-control" name="category">
                                        <option value="">Choose a category</option>
                                        <?php
                                        foreach ($categories as $value) {
                                            ?>
                                            <option value="<?= $value->id; ?>"><?= $value->ca_libelle; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="image"> Image </label>
                                    <input type="file" name="image" id="image" class="form-control" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="description"> Description </label>
                                    <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-success" name="ajouter" id="inscrire"> <span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>