<?php

class Persoon {
  private $_voornaam = "";
  private $_acternaam = "";
  private $_email = "";
  private $_wachtwoord = "";
  
  // In deze functie worden de waarde van voornaam, achternaam, email en wachtwoord meegeven als parameter.
  public function __construct (string $voornaam, string $achternaam, string $email, string $wachtwoord) {
    $this->_voornaam = $voornaam;
    $this->_achternaam = $achternaam;
    $this->_email = $email;
    $this->_wachtwoord = $wachtwoord;
  }
  
  // Deze functie zorgt ervoor dat we de variabeles terug kunnen oproepen.
  public function Registreren() {
    return $this->_voornaam;
    return $this->_achternaam;
    return $this->_email;
    return $this->_wachtwoord;
  }
  
  public function Aanmelden() {
    $accountEmail = "$this->_email";
    $accountWachtwoord = "$this->_wachtwoord";
  }
}


?>