<?php

class ControleurOrder {

    protected $m_order;
    protected $m_order_product;
    protected $m_product;
    protected $m_supplier;

    public function __construct() {
        $this->m_order = new Order();
        $this->m_order_product = new OrderProduct();
        $this->m_product = new Product();
        $this->m_supplier = new Supplier();
    }

    public function actionIndex() {
        $suppliers = $this->m_supplier->findAll();
        $products = $this->m_product->findAll();

        include 'list.php';
    }

    public function actionAddOrder() {
        $datas = filter_input_array(INPUT_POST);

        $id_order = $this->m_order->ajouter(array("ord_fk_supplier" => $datas['supplier']), TRUE);
        if ($id_order != 0) {
            $input = array("op_order_id" => $id_order, "op_product_id" => $datas['product'], "op_quantite" => $datas['quantity']);
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
