<table class="table table-hover">
    <tr class="menu">
        <td class="<?= (isset($module) && ($module == 'products')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("products"); ?>"><img src="<?= IMG_DIR; ?>/cnx.png">  PRODUCTS</a>
        </td>
    </tr>
    <tr class="menu">
        <td class="projet <?= (isset($module) && ($module == 'customers')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("customers"); ?>"><img src="<?= IMG_DIR; ?>/cnx.png">  CUSTOMERS</a>
        </td>
    </tr>
    <tr class="menu">
        <td class="<?= (isset($module) && ($module == 'suppliers')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("suppliers"); ?>"><img src="<?= IMG_DIR; ?>/cnx.png">  SUPPLIERS</a>
        </td>
    </tr>
    <tr class="menu">
        <td class="<?= (isset($module) && ($module == 'orders')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("orders"); ?>"><img src="<?= IMG_DIR; ?>/cnx.png">  ORDERS</a>
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