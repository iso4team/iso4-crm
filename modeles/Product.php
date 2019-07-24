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
                . "JOIN crm_category c ON c.id = prd_category "
                . "LEFT JOIN crm_store s ON s.id = prd_fk_store_id";
        return $this->executerReq($sql);
    }

}
