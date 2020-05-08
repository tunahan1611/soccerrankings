<?php

require_once(__DIR__ . "/persoon.php");

class Administrator extends Persoon{
  private $_code = 0;
  
  public function __construct($voornaam, $achternaam, $email, $wachtwoord, integer $code) {
    parent:: __construct($voornaam, $achternaam, $email, $wachtwoord);
    $this->_code = $code;
  }
  
  public function CodeIngeven() {
    return $this->_code;
  }
  
  public function Aanpassen() {
    
  }
  
  public function Toevoegen() {
    
  }
  
  public function Verwijderen() {
    
  }
}

?>