<?php
class Hotel
{
    private string $name_hotel;
    private string $address;
    private string $city;
    private string $zipcode;
    private array $reservations;
    private array  $bedrooms;


    public function __construct($name_hotel, $address, $city, $zipcode)
    {
        $this->name_hotel = $name_hotel;
        $this->address = $address;
        $this->city = $city;
        $this->zipcode = $zipcode;
        $this->bedrooms = [];
        $this->reservations = [];
    }

    public function get_name_hotel()
    {
        return $this->name_hotel;
    }
    public function get_address()
    {
        return $this->address;
    }
    public function get_city()
    {
        return $this->city;
    }
    public function get_zipcode()
    {
        return $this->zipcode;
    }




    public function set_name_hotel($name_hotel)
    {
        $this->name_hotel = $name_hotel;
    }
    public function set_address($address)
    {
        $this->address = $address;
    }
    public function set_city($city)
    {
        $this->city = $city;
    }
    public function set_zipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }


    public function addBed(Bedroom $bedroom)
    {
        $this->bedrooms[] = $bedroom;
    }

    public function chambres_reservees()
    {
        $nb_chambres_reservees = 0;
        foreach ($this->bedrooms as $room) {
            if ($room->get_status() == "réservée") {
                $nb_chambres_reservees++;
            }
        }
        return $nb_chambres_reservees;
    }

    public function afficher_bedrooms()
    {
        echo "Nombre de chambre total : " . count($this->bedrooms),
        "<br>Nombre de chambre réservée : " . $this->chambres_reservees(),
        "<br>Nombre de chambre disponible : " . (count($this->bedrooms) - $this->chambres_reservees());
        //"$this" ici permet de placer la function __toString avant "<br><br>nombre de chambre " si le $this est placé apres alors le "<br><br>nombre de chambre " ce retrouverait avant sur la page voila pourquoi il faut le placer avant ce dernier et aussi pourquoi il serait preferable de le place avant le $nb_chambre placer comme ca il sera plus logique

        // foreach($this->bedrooms as $bedroom){//je crée une variable nombre de chambre occupée
        //    si le status de la chambre est true j'augment de 1 le nombre de chambre occupée
        //     $result = $bedroom;
        //     echo $result;
        // }
    }


    public function tableau_chambres(){
        echo "<h3>Status des chambres de ".$this->get_name_hotel()." **** ".$this->get_city()."</h3><br><table class='uk-table uk-table-striped'>",
            "<thead>",
                "<tr >",
                    "<th> CHAMBRES </th>",
                    "<th> PRIX </th>",
                    "<th> WIFI </th>",
                    "<th> ETAT </th>",
                "</tr>",
            "</thead>",
            "<tbody>";
        foreach($this->bedrooms as $bedrooms){
            echo "<tr>",
            "<td>"."Chanbre ".$bedrooms->get_room_number()."</td>",
            "<td>".$bedrooms->get_price()." €"."</td>",
            "<td>".$bedrooms->get_wifi()."</td>",
            "<td>".$bedrooms->get_status()."</td>",
            "</tr>";
        };
        echo "</tbody> </table>";
     

    }






    public function add_reserv_hotel(Reservation $reserv_hotel)
    {
        $this->reservations[] = $reserv_hotel;
    }



    public function afficher_reserv_hotel()
    {
        $res_hotel = count($this->reservations);
        echo  $this . "<br><br>nombre de reservation dans l'hotel : " . $res_hotel; //"$this" ici permet de placer la function __toString avant "<br><br>nombre de chambre " si le $this est placé apres alors le "<br><br>nombre de chambre " ce retrouverait avant sur la page voila pourquoi il faut le placer avant ce dernier et aussi pourquoi il serait preferable de le place avant le $nb_chambre placer comme ca il sera plus logique

        foreach ($this->reservations as $hotel_res) { //je crée une variable nombre de chambre occupée
            //si le status de la chambre est true j'augment de 1 le nombre de chambre occupée
            $result = $hotel_res;
            echo $result;
        }
    }
    public function get_infos()//ce get_info permet de voir tout les reservation d'un hotel
    {
        echo "<h3>Réservation de l'hôtel ".$this->get_name_hotel()." **** ".$this->get_city()."</h3>";
        if (count($this->reservations) > 0) {
            echo count($this->reservations) . " reservations";
            foreach ($this->reservations as $reservation) {
                echo "<br>" . $reservation;
            }
        } else {
            echo "Aucune reservation !";
        }
    }




    public function __toString()
    {
        return "<h2>" . $this->get_name_hotel() . " **** " . $this->get_city() . "</h2>" . $this->get_address() . " " . $this->get_zipcode() . " " . $this->get_city();
    }
}
