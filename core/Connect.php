<?php

class Connect extends PDO {

    private static $_instance_C;

    public static function getInstance($base = NULL) {
        return self::getInstanceC();
    }

    public static function getInstanceC() {
        if (!isset(self::$_instance_C)) {
            error_log("connecting to cursus...");
            try {
                self::$_instance_C = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            } catch (PDOException $e) {
                error_log($e->getMessage());
                die('Erreur de connexion a la base cursus [' . $e->getMessage() . "]");
            }
        } else {
            error_log("already connected to cursus...");
        }
        return self::$_instance_C;
    }

    

}
