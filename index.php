<?php
session_start();

/* Les configs */
require_once 'configs/config.php';
require_once 'configs/routes.php';

$match = $router->match();
$async = false;
$login = false;
$erreurs = array();
$module = '';

if (isset($match['name'])) {
    $explode = explode('_', $match['name']);
    $module = $explode[0];
} else {
    $module = 'home';
}

set_include_path('.'
        . PATH_SEPARATOR . 'libs'
        . PATH_SEPARATOR . 'core'
        . PATH_SEPARATOR . 'modeles'
        . PATH_SEPARATOR . 'templates'
        . PATH_SEPARATOR . 'templates/menu'
        . PATH_SEPARATOR . 'modules'
        . PATH_SEPARATOR . 'modules/' . $module . '/vues'
        . PATH_SEPARATOR . 'modules/' . $module . '/forms'
        . PATH_SEPARATOR . 'modules/' . $module . '/modeles'
        . PATH_SEPARATOR . 'modules/default/vues' . get_include_path());



// Debut de la tamporisation de sortie
ob_start();

// - AJAX
$async = false;
$accept = (isset($_SERVER['HTTP_ACCEPT'])) ? $_SERVER['HTTP_ACCEPT'] : "";
$header = (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) ? $_SERVER['HTTP_X_REQUESTED_WITH'] : "";
if (Tools::contains("application/json", $accept) || Tools::contains("text/javascript", $accept) || ($header == "XMLHttpRequest")) {
    $async = true;
}
try {
    if (empty($match['target'])) {
        $erreurs[] = 'Pas de controleur pour cet url :' . $_SERVER['REDIRECT_URL'];
    } else {
        $control = $match['target']['c'];
        if (class_exists($control)) {
            $action = (isset($match['target']['a'])) ? $match['target']['a'] : 'actionIndex';
            $params = (!empty($match['params'])) ? $match['params'] : array();
            if (!method_exists($control, $action)) {
                $erreurs[] = "Le controleur <b><font color='red'>$control</b></font> ne possède pas d'action $action ";
            } else {
                call_user_func_array(array(new $control(), $action), $params);
            }
        } else {
            $erreurs[] = "Le controleur <b><font color='red'>$control</b></font> n'existe pas";
        }
    }
} catch (Exception $ex) {
    $erreurs[] = $ex->getMessage();
} catch (ErrorException $ex) {
    $erreurs[] = $ex->getMessage();
}

/* Fin de la tamporisation de sortie */
$contenu = ob_get_clean();

/* affichage du tampon */
if ($async) {
    if (!empty($erreurs)) {
        echo json_encode($erreurs);
    } else {
        echo $contenu;
    }
} else {
    require(HTML_DIR . 'head.php');
    if (!empty($erreurs)) {
        require(HTML_DIR . 'erreur.php');
    } else {
        require(HTML_DIR . 'header.php');
        echo $contenu;
        require(HTML_DIR . 'footer.php');
    }
}



    