<?php


spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});



$h1 = new Hotel ("Hilton", "10 route de la Gare", "STRASBOURG", "67000");
 $h2 = new Hotel ("Regent", "dans paris", "PARIS", "75000");

$b1 = new Bedroom (201, 120, true, 2, $h1);
$b2 = new Bedroom (202, 180, false, 4, $h1);
$b3 = new Bedroom (203, 150, false, 4, $h1);
$b4 = new Bedroom (204, 120, false, 4, $h1);
$b5 = new Bedroom (205, 120, true, 4, $h1);
$b6 = new Bedroom (206, 90, false, 4, $h1);
$b7 = new Bedroom (207, 140, true, 4, $h1);
$b8 = new Bedroom (208, 180, true, 4, $h1);
$b9 = new Bedroom (209, 110, false, 4, $h1);
$b10 = new Bedroom (210, 100, false, 4, $h1);
$b11 = new Bedroom (211, 150, true, 4, $h1);
$b12 = new Bedroom (212, 120, true, 4, $h1);
$b13 = new Bedroom (213, 180, true, 4, $h1);
$b14 = new Bedroom (214, 170, false, 4, $h1);


$c1 = new Client ("luc", "jean");
$c2 = new Client ("bob", "bernard");

$r1 = new Reservation($h1, $b1, "2020-10-02", "2021-10-04", $c1);
$r2 = new Reservation($h1, $b2, "2020-10-02", "2021-10-04", $c1);
$r3 = new Reservation($h1, $b2, "2020-10-02", "2021-10-04", $c2);
$r4 = new Reservation($h1, $b2, "2020-10-02", "2021-10-04", $c2);
$r5 = new Reservation($h1, $b2, "2020-10-02", "2021-10-04", $c2);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit-icons.min.js"></script>
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


    <div class="wrapper">

        <?php
       
        echo  "<br>";
    
        ?>
        <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
            <h3 class="uk-card-title">
                <?=  $h1 ?>
            </h3>
            <?php
            echo $h1->afficher_bedrooms();
            ?>
        </div>
        <?php
    
        // echo $h1->chambres_reservees();
        ?>
        <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
            <h3 class="uk-card-title">
                <?=  $h1 ?>
            </h3>
            <?php
             echo $h1->get_infos();
             echo " <br> <br>";
            ?>
        </div>
        <?php

?>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title">
        <?=  $h1 ?>
    </h3>
    <?php
     echo $h2->get_infos();
     echo " <br> <br>";
    ?>
</div>
<?php

?>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title">
        <?=  $h1 ?>
    </h3>
    <?php
    echo $c1->afficher_reserv_client();
    echo " <br> <br>";
    ?>
</div>
<?php
        // echo " <br> <br>";
        // echo $h1->get_infos();
        // echo "<br>";
        // echo $h2->get_infos();
        // echo $c1->afficher_reserv_client();
        echo "<br><br>";
        echo $h1->tableau_chambres();
        ?>
    </table>
    </div>
</body>
</html>