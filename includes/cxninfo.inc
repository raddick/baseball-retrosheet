<?php

$host = "mysql.webhero.com:3306";
$user = "retrosheet.org";
$passwd = "g97s80d76";
$dbname = "retrosheet_org";

$cxn = mysqli_connect($host,$user,$passwd,$dbname)
  OR die ("Unable to connect to server");

?>
