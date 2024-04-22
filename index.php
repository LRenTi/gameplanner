<?php
    session_start();
    setcookie("includeCookie", time()+3600);
?>

<!DOCTYPE html>
<html lang="de">
<head>

<!-- MY HEAD -->
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/Favicon.ico?version=1" type="image/ico">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Sweet Alert -->
    <link type="text/css" href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

    <body>
    <?php include 'parts/sidebar.php'; ?>

    <main class="content">
    <?php include 'parts/header.php'; ?>

        <?php

        if (!isset($_GET["includepart"]) && isset($_COOKIE["includepartCookie"]))
        {
            $_GET["includepart"] = $_COOKIE["includepartCookie"];
        }

			if(isset($_GET["include"]))
			{

                if ($_GET["include"] == "dashboard")
				{
					include("pages/dasboard.php");
				}
                else if ($_GET["include"] == "gameplan")
				{
					include("pages/gameplan.php");
				}
                else if ($_GET["include"] == "register")
                {
                    include("pages/register.php");
                }
                else if ($_GET["include"] == "login")
                {
                    include("pages/login.php");
                }
                else if ($_GET["include"] == "profile")
				{
					include("pages/profile/profile.php");
				}
                else if ($_GET["include"] == "admin")
				{
					include("pages/admin.php");
				}
			}
            
            else {
                include('pages/home.php');
                }
        ?>
        </main>
    </body>
    <?php include 'parts/scripts.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</html>