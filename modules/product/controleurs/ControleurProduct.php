<?php

class ControleurProduct {

    protected $m_product;
    protected $m_category;

    public function __construct() {
        $this->m_product = new Product();
        $this->m_category = new ProductCategory();
    }

    public function actionIndex() {
        $categories = $this->m_category->recherche();
        
        $products = $this->m_product->findAll();
                
        include 'list.php';
    }

    public function actionAddProduct() {
        $data = filter_input_array(INPUT_POST);

        $input = array();
        if (isset($_FILES['image'])) {
            $loadResp = Tools::loadFile('image', 'products/' . date('YmdSS'));
            echo $loadResp;
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
    public function actionDeleteProduct(){
        $id = $_POST['id'];
        if($this->m_product->supprimer($id)){
            echo "Product delete successfully.";
        } else {
            echo "Oups! Error when added product.";
        }
    }

}
