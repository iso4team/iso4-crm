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
class Customer extends Model {

    var $table = 'crm_customer';
    var $db;

    public function __construct() {
        parent::__construct();
    }

    public function findAll() {
        $sql = "SELECT s.id, u.* FROM crm_customer s JOIN crm_user u ON u.id = s.cus_fk_user";
        return $this->executerReq($sql);
    }
}
