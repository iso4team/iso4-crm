<?php

class ControleurSale {

    protected $m_product;
    protected $m_category;
    protected $m_sale;
    protected $m_sale_item;

    public function __construct() {
        $this->m_product = new Product();
        $this->m_sale = new Sale();
        $this->m_sale_item = new SaleItem();
        $this->m_category = new ProductCategory();
    }

    public function actionIndex() {
        $products = $this->m_product->findAll();
        include 'add.php';
    }

    public function actionAdd() {
        $data = filter_input_array(INPUT_POST);

        $input = array();
        if (isset($_FILES['image'])) {
            $loadResp = Tools::loadFile('image', 'products/' . date('YmdSS'));
            if (Tools::startsWith($loadResp, "0;")) {
                $input['prd_image'] = substr($loadResp, 2, strlen($loadResp));
            }
        }

        $input['prd_name'] = $data['name'];
        $input['prd_price'] = $data['price'];
        $input['prd_description'] = addslashes($data['description']);
        $input['prd_category'] = $data['category'];

        if ($this->m_product->ajouter($input)) {
            echo "Product added successfully.";
        } else {
            echo "Oups! Error when added product.";
        }
    }

    public function actionDelete($id) {
        $id = $_POST['id'];
        if ($this->m_product->supprimer($id)) {
            echo "Product delete successfully.";
        } else {
            echo "Oups! Error when deleted product.";
        }
    }

    public function addSaleItem() {
        $id = $_REQUEST['article'];
        $qt = intval($_REQUEST['quantite']);

        $pd = $this->m_product->findProductById($id);

        if ($pd->prd_quantity < $qt) {
            exit(json_decode(array("code" => "111", "message" => "Stock insuffisant.")));
        }

        $idSl = intval($_REQUEST['sale_id']);
        if ($idSl == 0) {
            $sale = array('sa_status' => 'NON PAYEE');
            $idSl = $this->m_sale->ajouter($sale, TRUE);
        }

        $sale_item = array('si_fk_product' => $id, 'si_fk_sale' => $idSl, 'si_quantity' => $qt);
        $this->m_sale_item->ajouter($sale_item);

        $this->m_product->modifier(array("id" => $id, "prd_quantity" => ($pd->prd_quantity - $qt)));

        $rs = array("code" => "000", "message" => "SUCCESS", "sale_id" => $idSl, "product" => $pd);
        echo json_encode($rs);
    }

}
