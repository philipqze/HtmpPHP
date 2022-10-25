<?php

$proizvodi = array(
array(
    "id" => 1,
    "naziv" => "Laptop",
    "cena" => 1000,
    "kolicina" => 65
),
array(
    "id" => 2,
    "naziv" => "Monitor",
    "cena" => 350,
    "kolicina" => 35
),
array(
    "id" => 3,
    "naziv" => "Tastatura",
    "cena" => 200,
    "kolicina" => 47
),
);
function vratiPDV($cena){

    $pdv = $cena*0.2;
    return $pdv;
}

function vratiRabat($rabat)
{
    if ($rabat<40){
        return 2;
    }
    if ($rabat >40  && $rabat<50){
        return 3;
    }
    if ($rabat>50)
    {
    return 5;
}
}
function vratiIznos($cena,$kolicina){
    $iznospdv = vratiPDV($cena);
    $cenapdv = $cena + $iznospdv;
    $iznos = $cenapdv * $kolicina;
    $iznosrabata = $iznos * vratiRabat($kolicina)/100;
    return $iznos - $iznosrabata;
}
function vratiukupno(){
    global $proizvodi;
    $suma = 0;
    foreach($proizvodi as $pr)
    {
        $suma += vratiIznos($pr['cena'], $pr['kolicina']);
      }
      return $suma;
}

?>