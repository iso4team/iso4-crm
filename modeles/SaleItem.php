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
class SaleItem extends Model {

    var $prefix = 'prd';
    var $table = 'crm_sale_item';
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

    public function getInfosVente($id) {
        $sql = "SELECT sum(prd_price*si_quantity) montant, sum(si_quantity) total ";
        $sql .="FROM crm_sale_item s ";
        $sql .= "JOIN crm_product p ON s.si_fk_product = p.id ";
        $sql .= "WHERE s.si_fk_sale = ".$id;
        error_log($sql);
        $res = $this->executerReq($sql);
        return (!empty($res)) ? $res[0] : array();
    }
}
