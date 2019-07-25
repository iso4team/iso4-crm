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
class OrderProduct extends Model {

    var $table = 'crm_order_product';
    var $db;

    public function __construct() {
        parent::__construct();
    }

    public function findAll() {
        $sql = "SELECT op.*, o.*, p.*, s.*, u.*, date_format(ord_create_at, '%d %b %Y') order_date "
                . "FROM crm_order_product op, crm_order o, crm_product p, crm_supplier s, crm_user u "
                . "WHERE op_order_id = o.id "
                . "AND op_product_id = p.id "
                . "AND ord_fk_supplier = s.id "
                . "AND sup_fk_user = u.id";
        return $this->executerReq($sql);
    }
}
