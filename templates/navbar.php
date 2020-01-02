<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                    <li class="nav-item <?= (isset($module) && ($module == 'product')) ? "active" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("products"); ?>"><i class="fa fa-lg fa-product-hunt"></i>  PRODUCTS</a>
                    </li>
                
                    <li class="nav-item <?= (isset($module) && ($module == 'customer')) ? "active" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("customers"); ?>"><i class="fa fa-lg fa-users"></i>  CUSTOMERS</a>
                    </li>
               
                    <li class="nav-item <?= (isset($module) && ($module == 'supplier')) ? "active" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("suppliers"); ?>"><i class="fa fa-lg fa-users"></i>  SUPPLIERS</a>
                    </li>
                
                    <li class="nav-item <?= (isset($module) && ($module == 'order')) ? "active" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("orders"); ?>"><i class="fa fa-lg fa-print"></i>  ORDERS</a>
                    </li>
               
                    <li class="nav-item <?= (isset($module) && ($module == 'delivery')) ? "active" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("deliveries"); ?>"><i class="fa fa-lg fa-print"></i>  DELIVERIES</a>
                    </li>
                    <li class="nav-item <?= (isset($module) && ($module == 'sale')) ? "active" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("sales"); ?>"><i class="fa fa-lg fa-shopping-cart"></i>  SALES</a>
                    </li>
                    <li class="nav-item <?= (isset($module) && ($module == 'user')) ? "active" : ""; ?>">
                        <a class="nav-link" href="<?= Tools::generateURL("users"); ?>"><i class="fa fa-lg fa-users"></i>  USERS</a>
                    </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Aide</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
        </div>
    </div>
</nav>