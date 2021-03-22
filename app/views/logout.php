
<?php


include "../../SessionHelper.php";
unset($_SESSION["username"]);
session_destroy();
header("location: ../../index.php");
?>