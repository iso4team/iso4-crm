<?php

class ControleurDelivery {

    protected $m_order;
    protected $m_order_product;
    protected $m_product;

    public function __construct() {
        $this->m_order = new Order();
        $this->m_order_product = new OrderProduct();
        $this->m_product = new Product();
    }

    public function actionIndex() {
        $orders = $this->m_order_product->findAll();
        include_once 'list.php';
    }

    public function actionAddOrder() {
        $datas = filter_input_array(INPUT_POST);
        
        $input = array();
        if (isset($_FILES['bl'])) {
            $loadResp = Tools::loadFile('bl', 'products/' . date('YmdSS'));
            echo $loadResp;
            if (Tools::startsWith($loadResp, "0;")) {
                $input['dlv_bl'] = substr($loadResp, 2, strlen($loadResp));
            }
        }
        
        $input['dlv_fk_order_id'] = $datas['order'];
        $input['dlv_quantity'] = $datas['quantity'];
        $id_order = $this->m_order->ajouter($input, TRUE);
        if ($id_order != 0) {
            $input = array("op_order_id" => $datas['order'], "op_quantite" => $datas['quantity']);
            if ($this->m_order_product->ajouter($input)) {
                echo "Order added successfully.";
            } else {
                echo "Error when adding order.";
            }
        } else {
            echo "Error when adding order.";
        }
    }

}
