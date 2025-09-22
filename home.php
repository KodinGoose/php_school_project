<table id = "data_table">
    <tr>
        <td class = "info_col">Név: </td>
        <td><?php print $_SESSION["name"] ?></td>
    </tr>
    <tr>
        <td class = "info_col">Jelszó: </td>
        <td><?php print $_SESSION["pass"] ?></td>
    </tr>
    <tr>
        <td class = "info_col">Születési év: </td>
        <td><?php print $_SESSION["szulev"] ?></td>
    </tr>
    <tr>
        <td class = "info_col">Telefonszám: </td>
        <td><?php print $_SESSION["phone"] ?></td>
    </tr>
    <tr>
        <td class = "info_col">Email: </td>
        <td><?php print $_SESSION["email"] ?></td>
    </tr>
</table>
<form id = "logout_form" action = "index.php" method = "GET">
    <input id = "logout_button" name = "logout" value = "Kilépés" type = "submit">
</from>
