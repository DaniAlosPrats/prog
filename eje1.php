<?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
echo"$captals";
$cityarray=explode(",", $city)
    $captals=[]
    for($i=0; $i< count($cityarray);$i++){
        $countrycity["city"] = $cityarray[$i];
        array_push($captals, $countrycity);
    }
var_dump($captals);
?>