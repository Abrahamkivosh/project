<?php
$names = array("Abraham","garry","tINA","UdeMy");

$count = count($names);
$chg = implode(" ",$names);

function fletter(&$nam){
    $nam = ucwords(strtolower($nam));
    return $nam;
}

for($i = 0; $i <=$count;$i++){
   echo " <br />". fletter($chg);
}