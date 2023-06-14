<?php

$id = $_REQUEST['ID'];
$init = strtoupper($id[0]);

 $app = "./boxesetc/".$init."/P".$id.".htm";
 header("Location: $app");

?>