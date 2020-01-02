<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left">
                    <span class="fa fa-lg fa-shopping-cart"></span>&nbsp;NOUVELLE LIGNE
                </h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <input type="hidden" name="idVente" id="idVente" value="0">
                    <div class="form-group form-group-lg col-md-12">
                        <input type="number" name="quantite" id="quantite" class="form-control" placeholder="10" required >
                    </div>

                    <div class="form-group form-group-lg col-md-12">
                        <select class="form-control select-search" name="article" id="article" placeholder="Article">
                            <?php
                            foreach ($products as $value) {
                                ?>
                                <option value="<?= $value->id; ?>"><?= $value->prd_name; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div> 
                </div>
            </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-lg btn-block btn-primary" id="addSale">AJOUTER</button>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left">
                    <span class="fa fa-lg fa-cart-arrow-down"></span>&nbsp;LIGNES VENTE
                </h4>
            </div>
            <div class="panel-body" style="overflow: scroll; height:320px;">
                <table class="table table-hover table-striped table-bordered" id="salesList">
                    <thead>
                        <tr>
                            <th>Designation</th>
                            <th>Quantite</th>
                            <th>Prix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-8">
                        <div class="alert alert-info" id="sale-resume-text">
                            <span id="count">20</span> Article(s), Total = <span id="total">3000</span> F CFA
                        </div>
                    </div>
                    <div class="col-md-4 pull-right">
                        <button type="button" class="btn btn-lg btn-block btn-primary">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


