<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserProfil
 *
 * @author <ahmet.thiam@uvs.edu.sn>
 */
class Product extends Model {

    var $prefix = 'prd';
    var $table = 'crm_product';
    var $db;

    public function __construct() {
        parent::__construct();
    }

    public function findAll() {
        $sql = "SELECT p.*, c.ca_libelle category, s.str_code store "
                . "FROM crm_product p "
                . "JOIN crm_category_product c ON c.id = prd_category "
                . "LEFT JOIN crm_store s ON s.id = prd_fk_store_id";
        return $this->executerReq($sql);
    }

    public function search($name) {
        $sql = "SELECT id, prd_name, prd_description "
                . " FROM crm_product "
                . " WHERE prd_name LIKE '%$name%'"
                . " OR prd_description LIKE '%$name%'";
        return $this->executerReq($sql);
    }

    public function findProductById($id) {
        $res = $this->recherche(array("conditions" => "id = " . $id));
        return (!empty($res)) ? $res[0] : array();
    }

}
