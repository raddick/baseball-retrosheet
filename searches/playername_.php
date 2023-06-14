<?php

include("../includes/cxninfo.inc");

$res_p = "";
$first = $_REQUEST['First'];
$last = $_REQUEST['Last'];

###  DO A SERIES OF REPLACEMENTS TO ENSURE MATCHES; THEN, MAKE ALL CAPS

     $first = preg_replace("/\./", "", $first);
     $first = preg_replace("/\,/", "", $first);
     $first = preg_replace("/\(/", "", $first);
     $first = preg_replace("/\)/", "", $first);
     $first = preg_replace("/\'/", "", $first);
     $first = preg_replace("/\`/", "", $first);
     $first = preg_replace("/\"/", "", $first);

     $first = strtoupper($first);

     $last = preg_replace("/\./", "", $last);
     $last = preg_replace("/\,/", "", $last);
     $last = preg_replace("/\(/", "", $last);
     $last = preg_replace("/\)/", "", $last);
     $last = preg_replace("/\'/", "", $last);
     $last = preg_replace("/\`/", "", $last);
     $last = preg_replace("/\"/", "", $last);

     $last = strtoupper($last);
   
  $query = "SELECT PLAYERID, LAST FROM biodata WHERE (UPPER(LAST)='$last')";
  $q = mysqli_query($cxn, $query);

  $i = 0;
  while($r = mysqli_fetch_assoc($q))
  {  
   $i = $i+1;
   $ids[$i] = $r['PLAYERID'];
  }

  if($i==0)
  {
   $max_matches = 0;
  }
  if($i==1)
  {
   $id = $ids[1];
     $init = strtoupper($id[0]);

   $app = "../boxesetc/".$init."/P".$id.".htm";
   header("Location: $app");
  }

###  $MAX_MATCHES IS THE MAXIMUM NUMBER OF MATCHES OF ANY PLAYER
###     $NUMMAX IS THE NUMBER OF PLAYERS WITH THAT # OF MATCHES
###         IF $NUMMAX = 0, 'No results found'
###         IF $NUMMAX = 1, THAT'S THE PLAYER
###         IF $NUMMAX > 1, SHOW A TABLE OF PLAYER OPTIONS

###  $MATCHES SHOWS 'ID' AND # OF MATCHES FOR EVERY PLAYER W/ > 0 MATCHES
###  $MATCHES IS SORTED BY # OF MATCHES ('NUM') SO FIRST ENTRY HAS MOST MATCHES

$max_matches = 0;
     if ($max_matches==0)
      {
       $res_p = "No results found";
      }

       else
      {
        $matches = subval_sort($matches,'num');

     if ($nummax==1)
      {
       $id = $matches[0]['ID'];
       $init = strtoupper($id[0]);

       $app = "../boxesetc/".$init."/P".$id.".htm";
       header("Location: $app");
      }


     if ($nummax>1)
      {
       $nrows = $nmax;
       include("../searches/playeropts.php");
       exit;
      }
     }

?>