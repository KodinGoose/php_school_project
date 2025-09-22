<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báronovics Barnabás</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php

        function tryReging() {
            if (!isset($_GET["reg_name"])   || !isset($_GET["reg_pass"])  ||
                !isset($_GET["reg_szulev"]) || !isset($_GET["reg_phone"]) ||
                !isset($_GET["reg_email"])) {
                session_abort();
                return;
            }

            $_SESSION["name"] = $_GET["reg_name"];
            $_SESSION["pass"] = $_GET["reg_pass"];
            $_SESSION["szulev"] = $_GET["reg_szulev"];
            $_SESSION["phone"] = $_GET["reg_phone"];
            $_SESSION["email"] = $_GET["reg_email"];
        }

        function trySignIn() {
            if (!isset($_GET["sign_name"]) || !isset($_GET["sign_pass"]) ||
                !isset($_SESSION["name"])  || !isset($_SESSION["pass"])  ||
                $_SESSION["name"] == ""    || $_SESSION["pass"] == "")   {
                session_abort();
                return;
            }

            if ($_SESSION["name"] == $_GET["sign_name"] && $_SESSION["pass"] == $_GET["sign_pass"]) {
                $_SESSION["logged_in"] = true;
            } else {
                session_abort();
            }
        }
    
        session_start();
        if (isset($_GET["logout"])) {
            $_SESSION["logged_in"] = false;
        }

        if (!isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) {
            if (isset($_GET["register"])) {
                tryReging();
            } else if (isset($_GET["sign_in"])) {
                trySignIn();
            }
        }
        
        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
            include "home.php";
        } else {
            include "login.php";
        }
    ?>
</body>
</html>
