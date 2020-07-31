<?php  
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
$sungokong = new Ape("kera sakti");
$kodok = new Frog("buduk");


echo "Nama : " . $sheep->name; // "shaun"
echo "<br>";
echo  "Legs : " . $sheep->legs; // 2
echo "<br>";
echo "cold_blooded : " .  $sheep->cold_blooded; // false
echo "<br>";
echo "<br>";

echo "Nama : " . $sungokong->name;
echo "<br>";
echo "Legs : " . $sungokong->legs;
echo "<br>";
echo "Cold_blooded : " . $sungokong->cold_blooded;
echo "<br>";
echo "Suara : ";$sungokong->yell(); // "Auooo"
echo "<br>";
echo "<br>";

echo "Nama : " .  $kodok->name;
echo "<br>";
echo "Legs : " .  $kodok->legs;
echo "<br>";
echo "Cold_blooded : " .  $kodok->cold_blooded;
echo "<br>";
echo "Suara : ";$kodok->jump() ; // "hop hop"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>