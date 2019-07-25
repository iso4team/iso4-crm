<?php

class ControleurSupplier {

    protected $m_country;
    protected $m_supplier_category;
    protected $m_supplier;
    protected $m_user;

    public function __construct() {
        $this->m_country = new Country();
        $this->m_supplier_category = new SupplierCategory();
        $this->m_supplier = new Supplier();
        $this->m_user = new User();
    }

    public function actionIndex() {
        $countries = $this->m_country->recherche();
        $categories = $this->m_supplier_category->recherche();
        
        $suppliers = $this->m_supplier->findAll();

        include 'list.php';
    }

    public function actionAddSupplier() {
        $data = filter_input_array(INPUT_POST);

        $input = array();
        $input['usr_first_name'] = $data['firstname'];
        $input['usr_last_name'] = $data['lastname'];
        $input['usr_email'] = $data['email'];
        $input['usr_phone'] = $data['phone'];
        $input['usr_adresse'] = $data['address'];
        $input['usr_ville'] = $data['city'];
        $input['usr_fk_country'] = $data['country'];

        $id_supplier = $this->m_user->ajouter($input, TRUE);
        if ($id_supplier != 0) {
            if ($this->m_supplier->ajouter(array("sup_fk_user" => $id_supplier, "sup_category" => $data['category']))) {
                echo "Supplier added successfully.";
            } else {
                echo "Error when added supplier.";
            }
        } else {
            echo "Error when added supplier.";
        }
    }

}
