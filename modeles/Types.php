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
class Types extends Model {

    var $table = '';
    var $db;

    public function __construct() {
        parent::__construct("uvs_cursus");
    }

    public function findTypeTuteurByLibelle($lib) {
        $res = $this->executerReq("SELECT * FROM tuto_type_tuteur WHERE intitule = '" . $lib . "'");
        if (isset($res) && !empty($res)) {
            return $res[0];
        } else {
            return null;
        }
    }

    public function findAllPoles() {
        return $this->executerReq("SELECT * FROM tuto_pole");
    }

    public function findPoleByCode($code) {
        $res = $this->executerReq("SELECT * FROM tuto_pole WHERE code = '" . $code . "'");
        if (isset($res) && !empty($res)) {
            return $res[0];
        } else {
            return null;
        }
    }

    public function findPoleById($id) {
        $res = $this->executerReq("SELECT * FROM tuto_pole WHERE id = " . $id . "");
        if (isset($res) && !empty($res)) {
            return $res[0];
        } else {
            return null;
        }
    }

    public function findATuteurTypes() {
        return $this->executerReq("SELECT * FROM tuto_type_tuteur");
    }

    public function findTypeById($id) {
        $res = $this->executerReq("SELECT * FROM tuto_type_tuteur WHERE id = " . $id);
        if (isset($res) && !empty($res)) {
            return $res[0];
        } else {
            return null;
        }
    }

    public function findATuteurCategories() {
        return $this->executerReq("SELECT * FROM tuto_categorie_tuteur");
    }

    public function findCategoryByIntitule($int) {
        $res = $this->executerReq("SELECT * FROM tuto_categorie_tuteur WHERE intitule = '" . $int . "'");
        if (isset($res) && !empty($res)) {
            return $res[0];
        } else {
            return null;
        }
    }

    public function findATuteurDisciplines() {
        return $this->executerReq("SELECT * FROM tuto_champ_disciplinaire");
    }

    public function findATuteurSpecialites($discipline = NULL) {
        if (isset($discipline)) {
            return $this->executerReq("SELECT * FROM tuto_domaine_champ_disciplinaire where champ_disciplinaire = " . $discipline);
        } else {
            return $this->executerReq("SELECT * FROM tuto_domaine_champ_disciplinaire ");
        }
    }

    public function findATuteurGrades() {
        return $this->executerReq("SELECT * FROM tuto_grade");
    }

}
