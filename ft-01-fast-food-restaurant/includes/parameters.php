<?php
/* ---------------------Parameters after 05-Sep-2023-------------------- */
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
$_SESSION['apptype'] = "demo";

// $_SESSION['appuserid'] = "demo";
$_SESSION['appuserid'] = "ranjith";
//$_SESSION['appuserid'] = "dammika";

if (($_SESSION['apptype'] == "demo") and ($_SESSION['appuserid'] == "ranjith")) {
    $_SESSION['appuseremail'] = "ranjith@gmail.com";
    $_SESSION['appuserpassword'] = "pwranjith";
    $_SESSION['appuserstsrtpage'] = "./bookings.php";
    $_SESSION['hosttype'] = "local";
    // $_SESSION['hostname'] = "localhost";
    $_SESSION['hostname'] = "127.0.0.1";
    $_SESSION['projectfolder'] = "ft-01-fast-food-restaurant";
} elseif (($_SESSION['apptype'] == "demo") and ($_SESSION['appuserid'] == "dammika")) {
    $_SESSION['appuseremail'] = "dammika@gmail.com";
    $_SESSION['appuserpassword'] = "pwdammika";
    $_SESSION['appuserstsrtpage'] = "../admin-panel/login-admin.php";
    $_SESSION['hosttype'] = "remote";
    $_SESSION['hostname'] = "infinityfree";
    $_SESSION['projectfolder'] = "UD-04-MAHIBLOG";
} elseif (($_SESSION['apptype'] == "demo") and ($_SESSION['appuserid'] == "demo")) {
    $_SESSION['appuseremail'] = "demo@gmail.com";
    $_SESSION['appuserpassword'] = "pwdemo";
    $_SESSION['appuserstsrtpage'] = "../index.php";
    $_SESSION['hosttype'] = "remote";
    $_SESSION['hostname'] = "infinityfree";
    $_SESSION['projectfolder'] = "ft-01-fast-food-restaurant";
} else {
    $_SESSION['appuseremail'] = "ranjith@gmail.com";
    $_SESSION['appuserpassword'] = "pwranjith";
    $_SESSION['appuserstsrtpage'] = "./bookings.php";
    $_SESSION['hosttype'] = "local";
    $_SESSION['hostname'] = "localhost";
    $_SESSION['projectfolder'] = "ft-01-fast-food-restaurant";
}
