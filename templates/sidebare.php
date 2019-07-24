<table class="table table-hover">
    <tr class="menu">
        <td class="<?= (isset($module) && ($module == 'products')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("products"); ?>"><i class="fa fa-2x fa-product-hunt"></i>  PRODUCTS</a>
        </td>
    </tr>
    <tr class="menu">
        <td class="projet <?= (isset($module) && ($module == 'customers')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("customers"); ?>"><i class="fa fa-2x fa-users"></i>  CUSTOMERS</a>
        </td>
    </tr>
    <tr class="menu">
        <td class="<?= (isset($module) && ($module == 'suppliers')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("suppliers"); ?>"><i class="fa fa-2x fa-chain"></i>  SUPPLIERS</a>
        </td>
    </tr>
    <tr class="menu">
        <td class="<?= (isset($module) && ($module == 'orders')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("orders"); ?>"><i class="fa fa-2x fa-print"></i>  ORDERS</a>
        </td>
    </tr>
    <tr class="menu">
        <td class="<?= (isset($module) && ($module == 'orders')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("deliveries"); ?>"><i class="fa fa-2x fa-print"></i>  DELIVERIES</a>
        </td>
    </tr>
</table>

<?php
/* foreach ($_SESSION['phpCAS']['menus'] as $menu) {
  $link = (Tools::contains(":id", $menu['link'])) ? str_replace(":id", $_SESSION['phpCAS']['id_tuteur'], $menu['link']) : $menu['link'];
  ?>
  <tr class="menu">
  <td class="<?= (isset($menu['class'])) ? $menu['class'] : ""; ?> <?= (isset($module) && ($module == $menu['name'])) ? "menu-actif" : ""; ?>">
  <a href="<?= Tools::generateURL($link); ?>"><img src="<?= IMG_DIR . '/' . $menu['img']; ?>">  <?= $menu['title']; ?></a>
  </td>
  </tr>
  <?php
  } */
?>