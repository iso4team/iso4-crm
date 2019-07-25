<?php

class ControleurCustomer {
    
    protected $m_country;
    protected $m_customer;
    protected $m_user;

    public function __construct() {
        $this->m_country = new Country();
        $this->m_customer = new Customer();
        $this->m_user = new User();
    }

    public function actionIndex() {
        $countries = $this->m_country->recherche();
        $customers = $this->m_customer->findAll();
        include 'list.php';
    }

    public function actionAddCustomer() {
        $data = filter_input_array(INPUT_POST);

        $input = array();
        $input['usr_first_name'] = $data['firstname'];
        $input['usr_last_name'] = $data['lastname'];
        $input['usr_email'] = $data['email'];
        $input['usr_phone'] = $data['phone'];
        $input['usr_adresse'] = $data['address'];
        $input['usr_ville'] = $data['city'];
        $input['usr_fk_country'] = $data['country'];

        $id_customer = $this->m_user->ajouter($input, TRUE);
        if ($id_customer != 0) {
            if ($this->m_customer->ajouter(array("cus_fk_user" => $id_customer))) {
                echo "Customer added successfully.";
            } else {
                echo "Error when added customer.";
            }
        } else {
            echo "Error when added customer.";
        }
    }
}
