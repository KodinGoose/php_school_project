<table id = "main_table">
<tr>
    <td id = "reg">
    <form action = "index.php" method = "GET">
    <table id = "reg_table">
        <tr>
            <td colspan = "2">Regisztráció</td>
        </tr>
        <tr>
            <td class = "info_col">Név: </td>
            <td><input name = "reg_name"></td>
        </tr>
        <tr>
            <td class = "info_col">Jelszó: </td>
            <td><input name = "reg_pass" type = "password"></td>
        </tr>
        <tr>
            <td class = "info_col">Születési év: </td>
            <td><input name = "reg_szulev" type = "date"></td>
        </tr>
        <tr>
            <td class = "info_col">Telefonszám: </td>
            <td><input name = "reg_phone" type = "tel"></td>
        </tr>
        <tr>
            <td class = "info_col">Email: </td>
            <td><input name = "reg_email" type = "email"></td>
        </tr>
        <tr class = "submit">
            <td colspan = "2"><input name = "register" type = "submit" value = "Regisztálás"></td>
        </tr>
    </table>
    </form>
    </td>
    <td id = "sign">
    <form action = "index.php" method = "GET">
    <table id = "sign_table">
        <tr>
            <td colspan = "2">Bejelentkezés</td>
        </tr>
        <tr>
            <td class = "info_col">Név: </td>
            <td><input name = "sign_name"></td>
        </tr>
        <tr>
            <td class = "info_col">Jelszó: </td>
            <td><input name = "sign_pass" type = "password"></td>
        </tr>
        <tr class = "submit">
            <td colspan = "2"><input name = "sign_in" type = "submit" value = "Bejelentkezés"></td>
        </tr>
    </table>
    </form>
    </td>
</tr>
</table>
