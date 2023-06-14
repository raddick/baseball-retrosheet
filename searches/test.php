<?php

include("../includes/cxninfo.inc");

$last = "GARCIAPARRA";

  $query = "SELECT PLAYERID, LAST FROM biodata WHERE (UPPER(LAST)='$last')";
  $q = mysqli_query($cxn, $query);

  $i = 0;
  while($r = mysqli_fetch_assoc($q))
  {
   echo $r['PLAYERID'];
  }

?>