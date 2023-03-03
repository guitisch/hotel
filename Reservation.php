<?php
class Reservation {
private Hotel $hotel;
private Bedroom $bedroom;
private DateTime $date_start;
private DateTime $date_end;
private Client $client;



public function __construct($hotel, $bedroom, $date_start, $date_end, $client){
    $this->hotel = $hotel;
    $this->hotel ->add_reserv_hotel($this);
    $this->bedroom = $bedroom;
    $this->bedroom->add_reserv_bedroom($this);
    $bedroom->set_status(true);
    $this->date_start = new DateTime($date_start);
    $this->date_end = new DateTime($date_end);
    $this->client = $client;
    $this->client ->add_reserv_client($this);

    
    // $this->reservation = [];
}

public function get_hotel(){
    return $this->hotel;
}
public function get_bedroom(){
    return $this->bedroom;
}
public function get_date_start(){
    return $this->date_start;
}
public function get_date_end(){
    return $this->date_end;
}
public function get_client(){
    return $this->client;
}
// public function get_reservation(){
//     return $this->reservation;
// }

public function set_hotel($hotel){
    $this->hotel = $hotel;
}
public function set_bedroom($bedroom){
    $this->bedroom = $bedroom;
}
public function set_date_start($date_start){
    $this->date_start = $date_start;
}
public function set_date_end($date_end){
    $this->date_end = $date_end;
}
public function set_client($client){
    $this->client = $client;
}


public function __toString()
{//
    return   $this->client->get_first_name()." ".$this->client->get_name()." - Chambre ". $this->bedroom->get_room_number()." - du ".$this->get_date_start()->format("d-m-Y")." au ". $this-> get_date_end()->format("d-m-Y");
}
}