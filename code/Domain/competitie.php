<?php
require_once(__DIR__ . "/klassement.php");

class Competitie {
	private $_klassement = null;
	private $_voorDoelpunten = 0;
	private $_tegenDoelpunten = 0;
	private $_punten = 0;

  //Je geeft hier de waarden van punten, voordoelpunten en tegendoelpunten aan mee.
	public function __construct(integer $punten , integer $voorDoelpunten , integer $tegenDoelpunten ) {
		$this->_punten = $punten;
		$this->_voorDoelpunten = $voorDoelpunten;
		$this->_tegenDoelpunten = $tegenDoelpunten;
	}

  //Deze functie berekent het verschil tussen de voor- en tegendoelpunten om zo het saldo te bekomen.
	public function VerschilBerekenen()  {
		$saldo = $voorDoelpunten - $tegenDoelpunten;
		return $saldo;
	}
  
  //Deze functie zorgt ervoor dat de nieuwe punten bij de oude punten worden opgeteld om ze de actule punten stand te komen.
  public function PuntenOptellen() {
    $this->_huidigePunten = $huidigePunten + $punten;
  }
  
  //Deze functie zorgt ervoor dat het aantal goals gescoord door de ploeg word upgedadet, door de voor doelpunten van de nieuwe match erbij te tellen.
  public function VoorDoelpuntenOptellen()  {
    $this->_huidigeVoorDoelpunten = $huidigeVoorDoelpunten + $voorDoelpunten;
  }
  
  //Deze functie berekenen we het totaal aantal tegendelpunten van een club, door de tegendoelpunten bij de al verkregen tegendoelpunten te tellen.
  public function TegenDoelpuntenOptellen()  {
    $this->_huidigeTegenDoelpunten = $huidgeTegenDoelpunten + $tegenDoelpunten;
  }
  
  //Deze functie geeft het klassement terug weer.
  public function GetKlassement() {
    return $klassement;
  }
}
?>