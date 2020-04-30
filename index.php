<?php
define('PALIER_10', 10);
define('PALIER_50', 50);
define('PALIER_100', 100);
define('PALIER_250', 250);
define('PALIER_500', 500);
$rand = rand(0, 1000);

/*if ($rand < PALIER_10){
    echo "$rand est plus petit que 10";
}
elseif ($rand <PALIER_50) {
    echo "$rand est plus petit que 50";
}
elseif ($rand < PALIER_100) {
    echo "$rand est plus petit que 100";
}
elseif ($rand < PALIER_250) {
    echo "$rand est plus petit que 250";
}
elseif ($rand < PALIER_500) {
    echo "$rand est plus petit que 500";
}
else{
    echo "$rand est plus grand que 500"; 
}*/

$jaiTrouve = false;

if ($rand < PALIER_10){
    echo "$rand est plus petit que 10";
    $jaiTrouve = true;
}
if ($rand < PALIER_50 && !$jaiTrouve){
    echo "$rand est plus petit que 50";
    $jaiTrouve = true;
}
if ($rand < PALIER_100 && !$jaiTrouve){
    echo "$rand est plus petit que 100";
    $jaiTrouve = true;
}
if ($rand < PALIER_250 && !$jaiTrouve){
    echo "$rand est plus petit que 250";
    $jaiTrouve = true;
}
if ($rand < PALIER_500 && !$jaiTrouve){
    echo "$rand est plus petit que 500";
    $jaiTrouve = true;
}
if (!$jaiTrouve){
    echo "$rand est plus grand que 500";
}
?>