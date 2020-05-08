<?php

require_once(__DIR__ . "/persoon.php");
require_once(__DIR__ . "/team.php");

class Gebruiker extends Persoon{
  private $_favorieteTeam = null;
  
  //Je geeft hier de waarden van voornaam, achternaam, email en wachtwoord aan mee.  
  public function __construct($voornaam, $achternaam, $email, $wachtwoord, integer $code) {
    parent:: __construct($voornaam, $achternaam, $email, $wachtwoord);
  }
  
  // Deze functie maakt de favoriete team aan.
  public function FavorieteTeamSelecteren(Team $favorieteTeam) {
    $this->_favorieteTeam = $team;
  }
  
  // Hier zorgen we ervoor dat we de waarde van favorieteTeam kunnen oproepen.
  public function GetFavorieteTeam() {
    return $favorieteTeam;
  }
}

?>