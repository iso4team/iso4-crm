<table class="table table-hover">
    <tr class="menu">
        <td class="parametrage <?= (isset($module) && ($module == 'paiement')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("paiement"); ?>"><img src="<?= IMG_DIR; ?>/user.png">  PAIEMENT</a>
        </td>
    </tr>
    <tr class="menu">
        <td class="projet <?= (isset($module) && ($module == 'user')) ? "menu-actif" : ""; ?>">
            <a href="<?= Tools::generateURL("users"); ?>"><img src="<?= IMG_DIR; ?>/cnx.png">  UTILISATEUR</a>
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