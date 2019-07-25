<div class="col-md-14 modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" and data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form form-horizontal form-add" method="POST" action="suppliers/add" id="form-add">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="modal-title text-center" id="myModalLabel"> SUPPLIER | ADD </span>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="loading-div alert alert-infos infos-traite">Ajout en cours. Merci de patienter...</div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="firstname"> First name </label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Ahmet" required >
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname"> Last name </label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="THIAM" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="email"> Email </label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="iso4digit@iso4digit.com" required >
                                </div>
                                <div class="col-md-6">
                                    <label for="phone"> Phone </label>
                                    <input type="text" name="phone" id="phone" class="form-control" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="city"> City </label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="Dakar" required >
                                </div>
                                <div class="col-md-6">
                                    <label for="country"> Country </label>
                                    <select class="form-control select-search" name="country">
                                        <option value="">Choose a country</option>
                                        <?php
                                        foreach ($countries as $value) {
                                            ?>
                                            <option value="<?= $value['id']; ?>"><?= $value['cnt_libelle']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="category"> Category </label>
                                    <select class="form-control select-search" name="category">
                                        <option value="">Choose a category</option>
                                        <?php
                                        foreach ($categories as $value) {
                                            ?>
                                            <option value="<?= $value['id']; ?>"><?= $value['ca_libelle']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="address"> Address </label>
                                    <textarea name="address" id="address" class="form-control" rows="5" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-success" name="btn-add-supplier" id="btn-add-supplier"> <span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>