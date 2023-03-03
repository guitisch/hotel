<?php
class Client{
    private string $name;
    private string $first_name;
    private array $reservations;


    public function __construct($first_name, $name){
        $this->name = $name;
        $this->first_name = $first_name;
        $this->reservations = [];

    }
public function get_name(){
    return strtoupper($this->name);
     
}
public function get_first_name(){
    return ucwords($this->first_name);
}
public function get_reservation(){
    return $this->reservations;
}


public function set_name($name){
    $this->name = $name;
}
public function set_first_name($first_name){
    $this->first_name = $first_name;
}
public function set_reservation($reservation){
    $this->reservations = $reservation;
}


public function add_reserv_client(Reservation $reserv){
    $this -> reservations[] = $reserv;
}
public function afficher_reserv_client(){
    $res_Client = count($this->reservations);
    echo "<br><h3>Réservation de ".$this->get_first_name()." ".$this->get_name()."</h3>";
    echo  $res_Client ." réservation<br>";//"$this" ici permet de placer la function __toString avant "<br><br>nombre de chambre " si le $this est placé apres alors le "<br><br>nombre de chambre " ce retrouverait avant sur la page voila pourquoi il faut le placer avant ce dernier et aussi pourquoi il serait preferable de le place avant le $nb_chambre placer comme ca il sera plus logique
    $prixTotal = 0;
    foreach($this->reservations as $reserv){//je crée une variable nombre de chambre occupée
    //     //si le status de la chambre est true j'augment de 1 le nombre de chambre occupée
    //$reserv->get_hotel()->get_name_hotel() donc ca passe par la variable $reserv pour recuperer la class hotel(get_hotel())pour recuperer la valeurs du nom de l'hotel (get_name_hotel())
        echo "Hotel : ".$reserv->get_hotel()->get_name_hotel().$reserv->get_hotel()->get_city()." / Chambre : ".$reserv->get_bedroom()->get_room_number()." (".$reserv->get_bedroom()->get_beds_nb()." lits - ".$reserv->get_bedroom()->get_price()." € - ".$reserv->get_bedroom()->get_wifi().") du ".$reserv->get_date_start()->format("d-m-Y")." au ".$reserv->get_date_end()->format("d-m-Y")."<br>";
        $prixTotal+=$reserv->get_bedroom()->get_price();

     }
     echo "Total : ".$prixTotal;
     
    
   
}



public function __toString()
{
    return " ";//$this->get_name().$this->get_first_name().$this->get_reservation() ;
}
}