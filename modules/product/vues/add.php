<div class="col-md-14 modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" and data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form form-horizontal" name="form-ajoutUser" method="POST" action="#" id="ajout">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="modal-title text-center" id="myModalLabel"> ORDINATEUR | AJOUT </span>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="loading-div alert alert-infos infos-traite">Ajout en cours. Merci de patienter...</div>
                            <div class="form-group">
                                <label for="serie" class="col-md-4 text-right" align="right"> N° Série </label>
                                <div class="col-md-8">
                                    <input type="text" name="serie" id="serie" class="form-control" placeholder="AZER12358921HJZZ123" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="modele" class="col-md-4 text-right" align="right">Modele</label>
                                <div class="col-md-8">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loading-div4 alert alert-infos">Les mots de passe doivent être identiques avec la longueur dépassant 8 caractères.</div>
                    <hr>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Annuler</button>
                        <button type="submit" class="btn btn-success" name="ajouter" id="inscrire"> <span class="glyphicon glyphicon-save"></span> Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>