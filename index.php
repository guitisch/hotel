<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});



$h1 = new Hotel ("Hilton", "10 route de la Gare", "STRASBOURG", "67000");
// $h2 = new Hotel ("paris", "paris", "paris", "75000",$c54, 4);

$b1 = new Bedroom (201, 120, true, 2, $h1);
$b2 = new Bedroom (202, 120, true, 4, $h1);
// var_dump($b1);
// $b3 = new Bedroom (1, true, 120, true, 2, $c54);
// $b4 = new Bedroom (1, true, 120, true, 2, $c54);

$c1 = new Client ("luc", "jean");
$c2 = new Client ("bob", "bernard");

$r1 = new Reservation($h1, $b1, "2020-10-02", "2021-10-04", $c1);
$r2 = new Reservation($h1, $b2, "2020-10-02", "2021-10-04", $c1);
$r3 = new Reservation($h1, $b2, "2020-10-02", "2021-10-04", $c2);
$r4 = new Reservation($h1, $b2, "2020-10-02", "2021-10-04", $c2);
// $r5 = new Reservation($h1, $b2, "2020-10-02", "2021-10-04", $c2);



// var_dump($b1);
echo $h1->afficher_reserv_hotel();
echo " <br> <br>";
echo $h1->chambres_reservees();
echo " <br> <br>";
echo $c1->afficher_reserv_client();
echo " <br> <br>";

// var_dump($r1);
echo $b2->afficher_reserv_bedrooms();
// $h1->afficher_bedroom();
// echo " <br> <br>";
// var_dump($b1);
// echo $b1;
// var_dump($b1);
// echo " <br> <br>";
// var_dump($r1);
