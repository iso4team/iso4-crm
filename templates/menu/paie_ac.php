<tr class="menu">
    <td class="parametrage <?= (isset($module) && ($module == 'paiement')) ? "menu-actif" : ""; ?>">
        <a href="<?= Tools::generateURL("paiement"); ?>"><img src="<?= IMG_DIR; ?>/user.png">  PAIEMENT</a>
    </td>
</tr>
