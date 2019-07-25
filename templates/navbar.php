<?php
$pname = "";
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                    <li class="nav-item <?= (isset($module) && ($module == 'products')) ? "menu-actif" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("products"); ?>"><i class="fa fa-product-hunt"></i>  PRODUCTS</a>
                    </li>
                
                    <li class="nav-item <?= (isset($module) && ($module == 'customers')) ? "menu-actif" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("customers"); ?>"><i class="fa fa-users"></i>  CUSTOMERS</a>
                    </li>
               
                    <li class="nav-item <?= (isset($module) && ($module == 'suppliers')) ? "menu-actif" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("suppliers"); ?>"><i class="fa fa-chain"></i>  SUPPLIERS</a>
                    </li>
                
                    <li class="nav-item <?= (isset($module) && ($module == 'orders')) ? "menu-actif" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("orders"); ?>"><i class="fa fa-print"></i>  ORDERS</a>
                    </li>
               
                    <li class="nav-item <?= (isset($module) && ($module == 'orders')) ? "menu-actif" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("deliveries"); ?>"><i class="fa fa-print"></i>  DELIVERIES</a>
                    </li>
            </ul>
        </div>
    </div>
</nav>