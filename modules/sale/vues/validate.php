<div class="col-md-14 modal fade" id="validateSale" tabindex="-1" role="dialog" aria-labelledby="validateSale" data-keyboard="false" and data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form form-horizontal form-add" name="form-validate-sale" method="POST" action="products/add" id="form-add">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="modal-title text-center" id="myModalLabel"> SALE | VALIDATE </span>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info" id="saleRecap">Test</div>
                    <input type="hidden" name="saleId">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name"> Encaisse </label>
                            <input type="numeric" name="encaisse" id="encaisse" class="form-control form-control-lg" placeholder="10000" required >
                        </div>
                        <div class="col-md-6">
                            <label for="monnaie"> Monnaie </label>
                            <input type="text" name="monnaie" id="monnaie" class="form-control form-control-lg" readonly="">
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