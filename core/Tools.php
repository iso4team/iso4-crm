<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tools
 *
 * @author <ahmet.thiam@uvs.edu.sn>
 */
class Tools {

    public static function generateURL($url) {
        return APP_NAME . '/' . $url;
    }

    public static function contains($contenu, $contenant) {
        return strpos($contenant, $contenu) !== false;
    }

    public static function loadFile($name, $file_name) {

        $fileMimeTyp = pathinfo(basename($_FILES[$name]["name"]), PATHINFO_EXTENSION);
        $target_file = ROOT . "web/upload/".$file_name . "." . $fileMimeTyp;

        // Check if file already exists
        if (file_exists($target_file)) {
            return "1;Désolé. Le fichier existe déjà.";
        }
        // Check file size
        if ($_FILES[$name]["size"] > 500000) {
            return "1;La taille est trop grande.";
        }
        // Allow certain file formats
        if (!in_array($fileMimeTyp, array('xlsx', 'jpeg', 'jpg', 'png', 'docx', 'csv'))) {
            return "1;Format non reconnu.";
        }
        // Check if $uploadOk is set to 0 by an error
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
            return "0;" . $file_name . "." . $fileMimeTyp;
        } else {
            return "1;Désolé. Erreur lors du chargement.";
        }
    }

    public static function startsWith($haystack, $needle) {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    public static function endsWith($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }
        return (substr($haystack, -$length) === $needle);
    }

    public static function getClass4showDocument($url) {
        if (($url == null) || empty($url) || empty($url)) {
            return "";
        }
        if (!self::contains(".", $url)) {
            return "";
        }
        error_log($url);

        $parse = explode(".", $url);
        if (($parse[1] == 'pdf') || ($parse[1] == 'PDF')) {
            return "class='showDocumentDialog'";
        } else {
            return "class='showDocumentImgBtn'";
        }
    }

    public static function isEditable($name, $tuteur) {
        if (in_array($name, array("prenom", "nom", "rib_code", "rib_file"))) {
            if (isset($_SESSION['phpCAS']['id_tuteur']) && ($tuteur == $_SESSION['phpCAS']['id_tuteur'])) {
                return TRUE;
            }
            if (in_array("TUTO_DERI", $_SESSION['phpCAS']['profil'])) {
                return TRUE;
            }
            return FALSE;
        } else {
            error_log("else..." . $name);
            if (in_array("TUTO_DERI", $_SESSION['phpCAS']['profil'])) {
                error_log("TUTO_DERI...");
                return TRUE;
            }
            error_log("after...");
            return FALSE;
        }
    }

}
