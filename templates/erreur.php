<div class="container"> 
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Oops!</h1>
                <h2>404 Not Found</h2>
                <div class="error-details">
                    Désole, une erreur est survenue.
                </div>
                <pre><?php print_r($erreurs); ?></pre>
                <?= $contenu; ?>
                <div class="error-actions">
                    <a href="<?= Tools::generateURL(""); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span> Accueil</a>
                    <a href="<?= Tools::generateURL("logout"); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a>
                </div>
            </div>
        </div>
    </div>
</div>