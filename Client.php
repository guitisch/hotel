<?php
class Client{
    private string $name;
    private string $first_name;
    private array $reservations;


    public function __construct($name, $first_name){
        $this->name = $name;
        $this->first_name = $first_name;
        $this->reservations = [];

    }
public function get_name(){
    return $this->name;
}
public function get_first_name(){
    return $this->first_name;
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
    echo  $this."<br><br>nombre de client qui on reservée ".$res_Client;//"$this" ici permet de placer la function __toString avant "<br><br>nombre de chambre " si le $this est placé apres alors le "<br><br>nombre de chambre " ce retrouverait avant sur la page voila pourquoi il faut le placer avant ce dernier et aussi pourquoi il serait preferable de le place avant le $nb_chambre placer comme ca il sera plus logique
    
    foreach($this->reservations as $reserv){//je crée une variable nombre de chambre occupée
        //si le status de la chambre est true j'augment de 1 le nombre de chambre occupée
        $result = $reserv;
        echo $result;
    }
   
}



public function __toString()
{
    return " ";//$this->get_name().$this->get_first_name().$this->get_reservation() ;
}
}