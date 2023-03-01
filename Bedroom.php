<?php
class Bedroom{
private string $room_number;
private bool $status;
private int $price;
private bool $wifi;
private int $beds_nb;
private array $reservations;
private $hotel;

public function __construct($room_number, $price, $wifi, $beds_nb, Hotel $hotel){
    $this->room_number = $room_number;
    $this->status = false;
    $this->price = $price;
    $this->wifi = $wifi;
    $this->beds_nb = $beds_nb;
    $this->reservations = [];
    $this->hotel = $hotel;
    $this->hotel ->addBed($this);
}

public function get_room_number(){
    return $this->room_number;
}
public function get_status(){
    return $this->status;
}
public function get_price(){
    return $this->price;
}
public function get_wifi(){
    return $this->wifi;
}
public function get_beds_nb(){
    return $this->beds_nb;
}
public function get_reservations(){
    return $this->reservations;
}


public function set_room_number($room_number){
    $this->room_number = $room_number;
}
public function set_status($status){
    $this->status = $status;
}
public function set_price($price){
    $this->price = $price;
}
public function set_wifi($wifi){
    $this->wifi = $wifi;
}
public function set_nb_beds($beds_nb){
    $this->beds_nb = $beds_nb;
}

public function set_hotel($hotel){
    $this->hotel = $hotel;
}

public function add_reserv_bedroom(Reservation $reserv_bed){
    $this -> reservations[] = $reserv_bed;
}
public function afficher_reserv_bedrooms(){
    $res_bedroom = count($this->reservations);
    echo  $this."<br><br>nombre de reservation pour un client ".$res_bedroom;//"$this" ici permet de placer la function __toString avant "<br><br>nombre de chambre " si le $this est placé apres alors le "<br><br>nombre de chambre " ce retrouverait avant sur la page voila pourquoi il faut le placer avant ce dernier et aussi pourquoi il serait preferable de le place avant le $nb_chambre placer comme ca il sera plus logique
    
    foreach($this->reservations as $reserv_bed){//je crée une variable nombre de chambre occupée
        //si le status de la chambre est true j'augment de 1 le nombre de chambre occupée
        $result = $reserv_bed;
        echo $result;
    }
   
}

public function chambres_reservees(){
    $nb_chambres_reservees = 0;
    foreach($this->reservations as $room){
        if($room-> get_status() == true){
            $nb_chambres_reservees ++;
        }
    }
    return $nb_chambres_reservees;
}


public function __toString()
{
    return " ";
}
}