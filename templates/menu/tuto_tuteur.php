<tr class="menu">
    <td class="projet <?= (isset($module) && ($module == 'tuteurs')) ? "menu-actif" : ""; ?>">
        <a href="<?= Tools::generateURL("tuteurs/".$_SESSION['phpCAS']['id_tuteur']); ?>"><img src="<?= IMG_DIR; ?>/cnx.png">  PLANNING</a>
    </td>
</tr>
