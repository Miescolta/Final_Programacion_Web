<?php

$host="localHost";
$user="root";
$password="";
$database = "bartender";

$cxn = mysqli_connect($host,$user,$password,$database) or die ("ERROR");
//echo "base de datos conectada";
?>