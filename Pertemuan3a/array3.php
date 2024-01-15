<?php
$mobil = array("Ferrari", "Lamborghini", "Audi");
$negara = ["Singapura", "Indonesia" , "Jepang"];
$kota = array("Singaparna" , "Indramayu", "Jepara");

// echo  "Aku suka " . $mobil[0] .", " . $mobil[1] . " dan " . $mobil[2] . ".";
// echo "<br>";
// var_dump($negara);
// echo "<br>";
// print_r($kota);

var_dump($kota);
$kota[] = "Bogor";
echo"<br>";
var_dump($kota);
$kota[4] = "Jayapura";
echo"<br>";
var_dump($kota);
?>
