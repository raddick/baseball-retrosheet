<?php

$y = "";
$m = "";
$d = "";

if((isset($_REQUEST['Year']))&&($_REQUEST['Year']!=""))
   $y = $_REQUEST['Year'];

if((isset($_REQUEST['Month']))&&($_REQUEST['Month']!=""))
   $m = $_REQUEST['Month'];

if((isset($_REQUEST['Day']))&&($_REQUEST['Day']!=""))
   $d = $_REQUEST['Day'];

   $date = $m.$d.$y;
   $app = "./boxesetc/".$y."/".$date.".htm";
   header("Location: $app");

?>