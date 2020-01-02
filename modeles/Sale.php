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
class Sale extends Model {

    var $prefix = 'prd';
    var $table = 'crm_sale';
    var $db;

    public function __construct() {
        parent::__construct();
    }

    public function findAll() {
        return $this->recherche();
    }

    public function findSaleById($id) {
        $res = $this->recherche(array("conditions" => "id = " . $id));
        return (!empty($res)) ? $res[0] : array();
    }

}
