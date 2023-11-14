<?php
echo"2"."6";

session_start();
$_SESSION=[];
session_unset();
session_destroy();


header("Location: index.php");
exit;


?>