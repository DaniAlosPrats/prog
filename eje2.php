<?php
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
echo"$paises";
$countryarray= explode(",",$pais);

$paises=[];
for($i =0; $i<count($countryarray); $i++){

    $countryarray["capital"]= $countryarray[$i];
    array_push($paises, $countryarray);
}
var_dump($paises);

?>