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
