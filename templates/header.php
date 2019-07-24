<body>
    <div class="container-fluid ligne">
        <div class="row ligne1">
            <div class="col-md-12">
                <span class="col1">ICRM</span>
                <span class="col2">| ISO4DIGIT</span>
            </div>
        </div>

        <div class="container">
            <div class="row ligne2">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="logo" href="<?= Tools::generateURL(APP_NAME); ?>"><img src="<?= IMG_DIR.'/cnx.png'; ?>"></a>
                    <strong>ISO4CRM</strong>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 guide">
                </div>
                <div class="col-md-offset-1 col-md-3 col-sm-6 col-xs-12 profile">
                    <?php if (empty($_SESSION['phpCAS'])) { ?>
                        <a class="navbar-brand" href="<?= Tools::generateURL(""); ?>">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                            Logout
                        </a>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-md-3 img-user">
                                <img src="<?= IMG_DIR; ?>cnx.png" class="img-circle">
                            </div>
                            <div class="col-md-9">
                                <div class="bienvenu">Bienvenue</div>  
                                <div class="user"><?php
                                    if (!empty($_SESSION['phpCAS']['prenom']) && !empty($_SESSION['phpCAS']['nom'])) {
                                        echo $_SESSION['phpCAS']['prenom'] . ' ' . $_SESSION['phpCAS']['nom'];
                                    }
                                    ?></div> 
                                <a href="<?= Tools::generateURL("logout"); ?>">Déconnexion</a> 
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container contenu">

        <div id="documentImgModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="documentImgModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="modal-content-document">
                    <div class="modal-body">
                        <img src="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>

        <div id="dialog" style="display: none"></div>
        
        <div class="row">
            <div class="col-md-3">
                <?php include_once 'sidebare.php'; ?>
            </div>
            <div class="col-md-9">