<tr class="menu">
    <td class="projet <?= (isset($module) && ($module == 'tuteurs')) ? "menu-actif" : ""; ?>">
        <a href="<?= Tools::generateURL("tuteurs"); ?>"><img src="<?= IMG_DIR; ?>/cnx.png">  TUTEURS</a>
    </td>
</tr>
<tr class="menu">
    <td class="projet <?= (isset($module) && ($module == 'candidats')) ? "menu-actif" : ""; ?>">
        <a href="<?= Tools::generateURL("candidats"); ?>"><img src="<?= IMG_DIR; ?>/cnx.png">  CANDIDATS</a>
    </td>
</tr>
